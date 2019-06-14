<?php include_once("../Model/cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");

	$cpf= $_POST['cpf'];
	
	$cliente = new Cliente($cpf,"","","");

	$con = new Conection("localhost","root","aluno","secretshop");
	$con->conectar();
	
	$clienteDAO = new ClienteDAO();
	$clienteDAO->excluir($cliente,$con->getLink());
	

?>
