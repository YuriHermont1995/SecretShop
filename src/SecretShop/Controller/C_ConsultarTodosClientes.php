<?php include_once("../Model/cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");

	$con = new Conection("localhost","root","","BD1");
	$con->conectar();
	
	$clienteDAO = new ClienteDAO();
	$tabela = $clienteDAO->consultarTodos($con->getLink());
	
	$openTable="<table style=\"width:100%\" border=\"1\">
		<tr>
			<th>CPF</th>
			<th>Nome</th> 
			<th>Salario</th>
			<th>Nascimento</th>
		</tr>";
	$bodyTable = "" ;
	while($row = mysqli_fetch_assoc($tabela)){
			$bodyTable = $bodyTable."<tr>
				<td>".$row['CPF']."</td>
				<td>".$row['Nome']."</td> 
				<td>".$row['Salario']."</td>
				<td>".$row['Nascimento']."</td>
			</tr>";
		}
	$closeTable ="</table>";

	echo "<!DOCTYPE html>
			<html lang=\"pt-br\">

			<header>
			<meta charset=\"utf-8\">
			<title> Titulo </title>
			</header>

			<body>".$openTable.$bodyTable.$closeTable.
				

			"</body>

			</html>"
?>