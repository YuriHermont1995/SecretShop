<!DOCTYPE html>
<?php include_once("../Model/cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");

	$cpf= $_POST['cpf'];
	
	$cliente = new Cliente($cpf,"","",0,0,0,0,0,0,0,0);
	
	$con = new Conection("localhost","root","aluno","secretshop");
	$con->conectar();
	
	$clienteDAO = new ClienteDAO();
	$row = $clienteDAO->consultar($cliente,$con->getLink());
	//foreach($row as $value){echo $value;}
	//echo '<a href="../View/ConsultarCliente.php"?id='.$value.'</a>';
	//header("Location:../View/ConsultarCliente.php?id = $row");
	//echo "AAAAAAAAAAAAAAAAAAAAAAAAA";
		
		echo $row['cpf'];
		echo "<tr><td>";
		echo "Nome </td><td>".$row['nome']."</td>";
		echo "<td>Atributo </td><td>".$row['atributo']."</td>";
		echo "<td>Vida </td><td>".$row['vida']."</td>";
		echo "<td>Mana </td><td>".$row['mana']."</td>";
		echo "<td>Dano </td><td>".$row['dano']."</td>";
		echo "<td>Forca </td><td>".$row['forca']."</td>";
		echo "<td>Agilidade </td><td>".$row['agilidade']."</td>";
		echo "<td>Inteligencia </td><td>".$row['inteligencia']."</td>";
		echo "<td>Armadura </td><td>".$row['armadura']."</td>";
		echo "<td>Velocidade Atq </td><td>".$row['velocidadeDeAtaque']."</td></tr>";
		//echo 'CPF:<input type="text" name="cpf" value ='.$row[2].'><br>';
		//echo "Nome:<input type='text' name='nome' value =".$row[1]" ><br>";
		/*Atributo:<input type="text" name="atributo" value ="<?php $row[3] ?>"><br>
		
		Vida:<input type="text" name="cpf" disabled><br>
		Mana:<input type="text" name="cpf" disabled><br>
		Dano:<input type="text" name="cpf" disabled><br>
		
		Força:<input type="text" name="cpf" disabled><br>
		Agilidade:<input type="text" name="cpf" disabled><br>
		Inteligencia:<input type="text" name="cpf" disabled><br>
		Armadura:<input type="text" name="cpf" disabled><br>
		VelocidadeDeAtq:<input type="text" name="cpf" disabled><br>
		*/
?>
 
<!--
<html lang="pt-br">

<header>
	<meta charset="utf-8">
	<title> Titulo </title>
</header>

<body>
	<h2> Consultar Cliente </h2>
	<form action="../Controller/C_ConsultarCliente.php" method="post">
		CPF:<input type="text" name="cpf" value ="<?php echo $_POST['cpf'] ?>" ><br>
		Nome:<input type="text" name="nome" value ="<?php echo $row[1] ?>" ><br>
		Atributo:<input type="text" name="atributo" value ="<?php $row[3] ?>"><br>
		
		Vida:<input type="text" name="cpf" disabled><br>
		Mana:<input type="text" name="cpf" disabled><br>
		Dano:<input type="text" name="cpf" disabled><br>
		
		Força:<input type="text" name="cpf" disabled><br>
		Agilidade:<input type="text" name="cpf" disabled><br>
		Inteligencia:<input type="text" name="cpf" disabled><br>
		Armadura:<input type="text" name="cpf" disabled><br>
		VelocidadeDeAtq:<input type="text" name="cpf" disabled><br>
		
		<input type="submit" value="enviar">
		<input type="reset" value="apagar">
	</form>

</body>

</html>
-->
