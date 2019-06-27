<!DOCTYPE html>
<?php include_once("../Model/classItem.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ItemDAO.php");

	$nome= $_POST['nome'];
	$item = new Item($nome);
	$con = new Conection("localhost","root","aluno","secretshop");
	$con->conectar();
	$itemDAO = new ItemDAO();
	$row = $itemDAO->consultar($item,$con->getLink());
	$campos = ['Nome','Descriçao','Preco','Forca','Agilidade','Inteligencia','Vida','Mana','Dano','Armadura','Velocida de Ataque','HabilidadeAtiva','Descrição','Habilidade Passiva','descrição'];
	foreach($row as $value){echo $value."\n";}
	
		
		echo "<table  border = '1'>";
		echo "<tr><td>Nome </td><td>".$row['nome']."</td></tr>";
		echo "<tr><td>Descriçao </td><td>".$row['descricao']."</td>";
		echo "<tr><td>Preço </td><td>".$row['preco']."</td></tr>";
		
		if(!empty($row['vida'])){echo "<tr><td>Vida </td><td>".$row['vida']."</td></tr>";}
		
		if(!empty($row['mana'])){echo "<tr><td>Mana </td><td>".$row['mana']."</td></tr>";}
		if(!empty($row['dano'])){echo "<tr><td>Dano </td><td>".$row['dano']."</td></tr>";}
		if(!empty($row['forca'])){echo "<tr><td>Força </td><td>".$row['forca']."</td></tr>";}
		if(!empty($row['agilidade'])){echo "<tr><td>Agilidade </td><td>".$row['agilidade']."</td></tr>";}
		if(!empty($row['inteligencia'])){echo "<tr><td>Inteligencia </td><td>".$row['inteligencia']."</td></tr>";}
		if(!empty($row['armadura'])){echo "<tr><td>Armadura </td><td>".$row['armadura']."</td></tr>";}
		if(array_key_exists($row['velocidadeDeAtaque'])){echo "<tr><td>Velocidade de Ataque </td><td>".$row['velocidadeDeAtaque']."</td></tr>";}
		
		echo "<tr><td>Mana </td><td>".$row['mana']."</td></tr>";
		echo "<tr><td>Dano </td><td>".$row['dano']."</td></tr>";
		echo "<tr><td>Forca </td><td>".$row['forca']."</td></tr>";
		echo "<tr><td>Agilidade </td><td>".$row['agilidade']."</td></tr>";
		echo "<tr><td>Inteligencia </td><td>".$row['inteligencia']."</td></tr>";
		echo "<tr><td>Armadura </td><td>".$row['armadura']."</td></tr>";
		echo "<tr><td>Velocidade Atq </td><td>".$row['velocidadeDeAtaque']."</td></tr>";
		echo "</table>";
		*/
		
?>

