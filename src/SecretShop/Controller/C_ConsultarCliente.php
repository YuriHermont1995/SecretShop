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
	$cont =0;
	foreach($row as $value){
		echo "entrou...\n";
		echo $value;
		echo "sessionStorage.setItem($cont,$value)";
		$cont+=$cont;
	}
	//echo '<a href="../View/ConsultarCliente.php"?id='.$value.'</a>';
	header("Location:../View/ConsultarCliente.php?id = $row");
	//echo "AAAAAAAAAAAAAAAAAAAAAAAAA";
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
