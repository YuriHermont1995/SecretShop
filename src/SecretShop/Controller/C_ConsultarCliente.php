<!DOCTYPE html>
<?php include_once("../Model/Cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");

	$cpf= $_POST['cpf'];
	
	$cliente = new Cliente($cpf,"","",0,0,0,0,0,0,0,0);
	
	$con = new Conection("localhost","root","aluno","secretshop");
	$con->conectar();
	
	$clienteDAO = new ClienteDAO();
	$row = $clienteDAO->consultar($cliente,$con->getLink());
		
		echo "<table  border = '1'>";
		echo "<tr><td>Cpf </td><td>".$row['cpf']."</td></tr>";
		echo "<tr><td>Nome </td><td>".$row['nome']."</td></tr>";
		echo "<tr><td>Atributo </td><td>".$row['atributo']."</td>";
		echo "<tr><td>Vida </td><td>".$row['vida']."</td></tr>";
		echo "<tr><td>Mana </td><td>".$row['mana']."</td></tr>";
		echo "<tr><td>Dano </td><td>".$row['dano']."</td></tr>";
		echo "<tr><td>Forca </td><td>".$row['forca']."</td></tr>";
		echo "<tr><td>Agilidade </td><td>".$row['agilidade']."</td></tr>";
		echo "<tr><td>Inteligencia </td><td>".$row['inteligencia']."</td></tr>";
		echo "<tr><td>Armadura </td><td>".$row['armadura']."</td></tr>";
		echo "<tr><td>Velocidade Atq </td><td>".$row['velocidadeDeAtaque']."</td></tr>";
		echo "</table>";
		
?>

