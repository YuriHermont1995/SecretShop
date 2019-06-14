<?php include_once("../Model/ClassCliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");
	
	$nome= $_POST['nome'];
	$cpf= $_POST['cpf'];
	$atributo= $_POST['atributo'];

	//$vida= $_POST['vida'];
	$vida= 1000;
	//$mana= $_POST['mana'];
	$mana= 1000;
	//$dano= $_POST['dano'];
	$dano= 60;
	//$forca= $_POST['forca'];
	$forca= 30;
	//$agilidade= $_POST['agilidade'];
	$agilidade= 30;
	//$inteligencia= $_POST['inteligencia'];
	$inteligencia= 30;
	//$armadura= $_POST['armadaura'];
	$armadura= 10;
	//$velocidadeAtq= $_POST['velocidadeAtq'];
	$velocidadeAtq= 10;

	$cliente = new Cliente($cpf,$nome,$atributo,$vida,$mana,$dano,$forca,$agilidade,$inteligencia,$armadura,$velocidadeAtq);
	//$cliente->verMochila();

	$con = new Conection("localhost","root","aluno","secretshop");
	$con->conectar();

	$clienteDAO = new ClienteDAO();
	$clienteDAO->cadastrar($cliente,$con->getLink());
	

?>
