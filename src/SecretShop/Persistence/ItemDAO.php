<?php
include_once("../Model/ClassItem.php");
	class ItemDAO{
	
		function __construct(){
		}
//Função de cadastro de cliente no sistema
		function cadastrar($Item,$link){
			
			$insert ="INSERT INTO item(nome,descricao,preco,forca,agilidade,inteligencia,vida,mana,dano,armadura,velocidadeDeAtaque,habilidadeAtiva,descricaoAtiva,habilidadePassiva,descricaoPassiva)";
			$values = "VALUES ('".$Item->getNome()."','".$Item->getDescricao()."',".$Item->getPreco().",".$Item->getVida().",".$Item->getMana().",".$Item->getDano()."
,".$Item->getForca().",".$Item->getAgilidade().",".$Item->getInteligencia().",".$Item->getArmadura().",".$Item->getVelocidadeAtq().");";
		
			$query = $insert.$values;
		
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel salvar".mysqli_error($link));
			}
			echo "salvo com sucesso";
		}

//Função de Exclusao de cliente no sistema
		function excluir($Item,$link){
			$query = "DELETE FROM `Item` WHERE nome = '".$Item->getNome()."';";
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel excluir".mysqli_error($link));
			}
			echo "excluido com sucesso";
		}


//Função de select de um cliente no sistema
		function consultar($Item,$link){
			$query = "SELECT * FROM `item` WHERE nome = '".$Item->getNome()."';";
			$r = mysqli_query($link,$query);
			if (!$r) {
				echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
				echo 'Erro MySQL: ' . mysqli_error();
				exit;
			}
			
			return mysqli_fetch_assoc($r);
		}

//Função de Atualizaçao de cliente no sistema
		function alterar($Item,$link){
			echo $Item->getNome();
			$query = "UPDATE item SET Nome='".$Item->getNome()."',atributo='".$Cliente->getAtributo()."',vida=".$Cliente->getVida(). ",mana=".$Cliente->getMana(). ",dano=".$Cliente->getDano(). ",forca=".$Cliente->getForca(). ",agilidade=".$Cliente->getAgilidade(). ",inteligencia=".$Cliente->getInteligencia(). ",armadura=".$Cliente->getArmadura(). ",velocidadeDeAtaque=".$Cliente->getVelocidadeAtq(). " WHERE CPF = '".$Cliente->getCpf()."';";
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
