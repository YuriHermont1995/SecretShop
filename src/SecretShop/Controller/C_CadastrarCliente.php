<?php include_once("../Model/ClassCliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");

	$cpf= $_POST['cpf'];
	$nome= $_POST['nome'];
	$atributo= $_POST['atributo'];
	
	$vida= $_POST['vida'];
	$mana= $_POST['mana'];
	$dano= $_POST['dano'];
	
	$forca= $_POST['forca'];
	$agilidade= $_POST['agilidade'];
	$inteligencia= $_POST['inteligencia'];
	
	$armadura= $_POST['armadaura'];
	$velocidadeAtq= $_POST['velocidadeAtq'];
	
	$cliente = new Cliente($cpf,$nome,$atributo,$vida,$mana,$dano,$forca,$agilidade,$inteligencia,$armadura,$velocidadeAtq);
	$cliente->verMochila();

	$con = new Conection("localhost","root","699130","SecretShop");
	$con->conectar();
	
	$clienteDAO = new ClienteDAO();
	$clienteDAO->cadastrar($cliente,$con->getLink());
	

?>
