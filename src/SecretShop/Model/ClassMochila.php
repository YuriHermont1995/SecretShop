<?php
	class Mochila{
		var $idMochila,$itens;
		
		function __construct(){
			$this->itens = new array();
		}
		
		public function addItem($nomev){
			//Tratar excessao para item nao encontrado 
			$item =new Item($nomev)//Inicializa o item para ser inserido na mochila
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
