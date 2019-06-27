<?php
	class Item{
		var $nome, $descricao, $composicao, $preco, $forca,$agilidade, $inteligencia, $vida, $mana, $dano, $armadura, $velocidadeAtq, $img;
		
		function __construct($nomev){
			// instanciar realmente somente valores nao nulos do banco
			
			$this->nome = $nomev;
			/*$this->descricao = $descricaov;
			$this->preco = $precov;
			$this->forca = $forcav;
			$this->agilidade = $agilidadev;
			$this->inteligencia = $inteligenciav;
			$this->vida = $vidav;
			$this->mana = $manav;
			$this->dano = $danov;
			$this->armadura = $armadurav;
			$this->velocidadeAtq = $velocidadeAtqv;
			
			$this->habAtiva = $habAtivav;
			$this->habPassiva = $habPassivav;
			
			$this->descAtiva = $descAtiva;
			$this->descPassiva = $descPassiva;
			
			
			*/
		}
		
		
		
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nomev){
			$this->nome = $nomev;
		}
		
		public function getDescricao(){
			return $this->descricao;
		}
		public function setDescricao($descv){
			$this->descricao = $descv;
		}
		
		public function getPreco(){
			return $this->preco;
		}
		public function setPreco($preco){
			$this->preco = $preco;
		}
		
		public function getForca(){
			return $this->forca;
		}
		public function setForca($forcav){
			$this->forca=$forcav;
		}
		
		public function getAgilidade(){
			return $this->agilidade;
		}
		public function setAgilidade($agilidadev){
			$this->agilidade = $agilidadev;
		}
		
		public function getInteligencia(){
			return $this->inteligencia;
		}
		public function setInteligencia($inteligenciav){
			$this->inteligencia = $inteligenciav;
		}

		public function getVida(){
			return $this->vida;
		}
		public function setVida($vidav){
			$this->vida = $vidav;
		}

		public function getMana(){
			return $this->mana;
		}
		public function setMana($manav){
			$this->mana = $manav;
		}

		public function getDano(){
			return $this->dano;
		}
		public function setDano($danov){
			$this->dano=$danov;
		}

		public function getArmadura(){
			return $this->armadura;
		}
		public function setArmadura($armadurav){
			$this->armadura = $armadurav;
		}

		public function getVelocidadeAtq(){
			return $this->velocidadeAtq;
		}
		public function setVelocidadeAtq($velocidadeAtq){
			$this->velocidadeAtq = $velocidadeAtq;
		}

		public function getHabAtiva(){
			return $this->habAtiva;
		}
		public function setHabAtiva($habAtiva){
			$this->habAtiva = $habAtiva;
		}

		public function getDescAtiva(){
			return $this->descAtiva;
		}
		public function setDescAtiva($descAtiva){
			$this->descAtiva = $descAtiva;
		}

		public function getHabPassiva(){
			return $this->habPassiva;
		}
		public function setHabPassiva($habPassiva){
			$this->habPassiva = $habPassiva;
		}

		public function getDescPassiva(){
			return $this->descPassiva;
		}
		public function setDescPassiva($descPassiva){
			$this->descPassiva = $descPassiva;
		}

		//realizar a exibiçao do itemdeve ser apartir da verificação de campos nao NULL
		function exibirItem(){
			$return= $this->nome."\n força = ".$this->forca."\n agilidade = ".$this->agilidade."\n inteligencia = ".$this->inteligencia."\n inteligencia = ".$this->inteligencia."\n inteligencia = ".$this->inteligencia."\n";
		}
	}


?>
