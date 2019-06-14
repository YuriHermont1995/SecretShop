<?php include_once("../Model/cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");

	$cpf= $_POST['cpf'];
	
	$cliente = new Cliente($cpf,"","","");

	$con = new Conection("localhost","root","","BD1");
	$con->conectar();
	
	$clienteDAO = new ClienteDAO();
	$row = $clienteDAO->consultar($cliente,$con->getLink());
	

?>
