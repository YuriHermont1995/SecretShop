<?php include_once("../Model/cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");

	$cpf= $_POST['cpf'];
	$nome= $_POST['nome'];
	$atributo= $_POST['atributo'];
	$dano= $_POST['dano'];
	
	$cliente = new Cliente($cpf,$nome,$atributo,0,0,$dano,0,0,0,0,0);
	//$cliente->imprimirCliente();

	$con = new Conection("localhost","root","aluno","secretshop");
	$con->conectar();
	
	$clienteDAO = new ClienteDAO();
	$clienteDAO->alterar($cliente,$con->getLink());
	

?>
