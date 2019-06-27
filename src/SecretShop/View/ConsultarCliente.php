<!DOCTYPE html>
<?php
	include_once("../Controller/C_ConsultarCliente.php");
?>

<html lang="pt-br">

<header>
	<meta charset="utf-8">
	<title> Titulo </title>
</header>

<body>
	<h2> Consultar Cliente </h2>
	<form action="../Controller/C_ConsultarCliente.php" method="post">
		//CPF:<input type="text" name="cpf" value ="<?php echo$_POST['cpf'] ?>"><br>
		<?php 
			//Selecionar $cli = new Selecionar();
			//$dados = $cli->select($_POST['cpf']);
			//echo $dados;
		?>
		<input type="submit" value="enviar">
		<input type="reset" value="apagar">
		
		Atributo:<input type="text" name="atributo" value ="<?php $dados[3] ?>"><br>
		<!--
		/*<?php 
		for($campos;$campos <11;$campos+=$campos){
			$aux[$campos] = sessionStorage.getItem("$campos");;
		}
		echo $aux;
			if(!empty($aux)){
				echo $aux[0];
				echo '<input type="text" name="cpf1"><br>';
				echo 'Nome:<input type="text" name="nome" value ='.$id[1].'><br>';
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
			}
		?>-->
		
		
	</form>

</body>

</html>
