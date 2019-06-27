<?php
include_once("../Model/ClassMochila.php");
	class MochilaDAO{
	
		function __construct(){
		}
//Função de cadastro de Mochila(Cadastro de um item para o cliente) no sistema
		function cadastrar($Mochila,$link){
			
			$insert ="INSERT INTO Mochila(idCliente,idItem)";
			$values = "VALUES ($Mochila->getCliente,$Mochila->getItem);";
		
			$query = $insert.$values;
		
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel salvar".mysqli_error($link));
			}
			echo "salvo com sucesso";
		}

//Função de Exclusao de Mochila(Excluir um item de uma mochila) no sistema
		function excluir($Mochila,$link){
			$query = "DELETE FROM `mochila` WHERE idCliente =".$Mochila->getClient()." AND idItem = ".$Mochila->getItem();
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel excluir".mysqli_error($link));
			}
			echo "excluido com sucesso";
		}


//Função de select de todas as Mochilas de um cliente no sistema
		function consultar($Mochila,$link){
			$query = "SELECT * FROM `Mochila` WHERE idCliente = ".$Mochila->getCliente().";";
			$r = mysqli_query($link,$query);
			if (!$r) {
				echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
				echo 'Erro MySQL: ' . mysqli_error();
				exit;
			}
			
			return mysqli_fetch_assoc($r);
		}
}
?>
