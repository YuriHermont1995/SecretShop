<?php
include_once("../Model/ClassCliente.php");
	class ClienteDAO{
	
		function __construct(){
		}
//Função de cadastro de cliente no sistema
		function cadastrar($Cliente,$link){
			echo"entrou na bagaça?";
			echo $Cliente->getNome()."\n";
			echo $Cliente->getCpf()."\n";
			echo $Cliente->getAtributo()."\n";
			echo $Cliente->getVida()."\n";
			echo $Cliente->getMana()."\n";
			echo $Cliente->getForca()."\n";
			echo $Cliente->getAgilidade()."\n";
			echo $Cliente->getInteligencia()."\n";
			echo $Cliente->getArmadura()."\n";
			echo $Cliente->getVelocidadeAtq()."\n";
			$insert ="INSERT INTO cliente(nome,cpf,atributo,vida, mana, dano, forca, agilidade, inteligencia, armadura, velocidadeDeAtaque)";
			$values = "VALUES ('".$Cliente->getNome()."','".$Cliente->getCpf()."','".$Cliente->getAtributo()."',".$Cliente->getVida().",".$Cliente->getMana().",".$Cliente->getDano()."
,".$Cliente->getForca().",".$Cliente->getAgilidade().",".$Cliente->getInteligencia().",".$Cliente->getArmadura().",".$Cliente->getVelocidadeAtq().");";
		
			$query = $insert.$values;
			echo"mas saiu da bagaça?";
			echo $query;
		
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel salvar".mysqli_error($link));
			}
			echo "salvo com sucesso";
		}

//Função de Exclusao de cliente no sistema
		function excluir($Cliente,$link){
			$query = "DELETE FROM `cliente` WHERE CPF = '".$Cliente->getCpf()."';";
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel excluir".mysqli_error($link));
			}
			echo "excluido com sucesso";
		}


//Função de select de um cliente no sistema
		function consultar($Cliente,$link){
			$query = "SELECT * FROM `cliente` WHERE CPF = '".$Cliente->getCpf()."';";
			$r = mysqli_query($link, $query);
		
			if (!$r) {
				echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
				echo 'Erro MySQL: ' . mysqli_error();
				exit;
			}
			return mysqli_fetch_assoc($r);
		}

//Função de Atualizaçao de cliente no sistema
		function alterar($Cliente,$link){
			echo $Cliente->getNome();
			$query = "UPDATE cliente SET Nome='".$Cliente->getNome()."',atributo='".$Cliente->getAtributo()."',vida=".$Cliente->getVida(). ",mana=".$Cliente->getMana(). ",dano=".$Cliente->getDano(). ",forca=".$Cliente->getForca(). ",agilidade=".$Cliente->getAgilidade(). ",inteligencia=".$Cliente->getInteligencia(). ",armadura=".$Cliente->getArmadura(). ",velocidadeDeAtaque=".$Cliente->getVelocidadeAtq(). " WHERE CPF = '".$Cliente->getCpf()."';";
			echo $query;
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel alterar".mysqli_error($link));
			}
			echo "alterado com sucesso";
		}

/*
//Função de selecionar todos os cliente do sistema
		function consultarTodos($link){
			$query = "SELECT * FROM `cliente`";
			$r = mysqli_query($link, $query);

			if (!$r) {
				echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
				echo 'Erro MySQL: ' . mysqli_error();
				exit;
			}
			return $r;
		}
*/

}
?>
