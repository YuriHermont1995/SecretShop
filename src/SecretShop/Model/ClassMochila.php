<?php
include_once("../Model/ClassItem.php");
include_once("../Persistence/ItemDAO.php");
include_once("../Persistence/Conection.php");
	class Mochila{
		var $idCliente,$idItem;
		
		function __construct(){
			$this->itens = null;
		}
		public function addItem($nomev){
			//precisa pesquisar o item pelo nome, para assim pegar o idItem e criar uma nova mochila para aquele item
			//Tratar excessao para item nao encontrado 
			$aux =new Item($nomev);
			
			$con = new Conection("localhost","root","aluno","secretshop");
			$con->conectar();
			$itemDAO = new ItemDAO();
			$item = $itemDAO->consultar($aux,$con->getLink());
			
			$this->itens[] = $item;
		}
		public function removeItem($nomev){
			foreach($this->itens as $key => $value ){
				if($value0->getNome() ==$nomev){
					unset($this->itens[$key]);
					//Chamar MochilaDAO para realizar esta att no BD
				}
			}
		}
		function getItens(){
			foreach ($this->itens as $value) {
				 //echo $value; utilizar a impressao do objeto itens dentro de value
		}
	}
?>
