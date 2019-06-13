<?php include_once("../Model/cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");

	$cpf= $_POST['cpf'];
	$nome= $_POST['nomev'];
	$salario= $_POST['salario'];
	$nasc= $_POST['nasc'];
	
	$cliente = new Cliente($cpf,$nome,$salario,$nasc);
	$cliente->imprimirCliente();

	$con = new Conection("localhost","root","","BD1");
	$con->conectar();
	
	$clienteDAO = new ClienteDAO();
	$clienteDAO->alterar($cliente,$con->getLink());
	

?>