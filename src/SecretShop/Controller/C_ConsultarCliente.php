<?php include_once("../Model/cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");

	$cpf= $_POST['cpf'];
	
	$cliente = new Cliente($cpf,"","",0,0,0,0,0,0,0,0);
	
	$con = new Conection("localhost","root","aluno","secretshop");
	$con->conectar();
	
	$clienteDAO = new ClienteDAO();
	$row = $clienteDAO->consultar($cliente,$con->getLink());
	
	foreach($row as $value){
		echo '<a href="ConsultarCliente.php?id='.$value.'</a>';
	}
	 
?>
