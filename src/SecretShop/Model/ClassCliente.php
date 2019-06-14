<?php
	class Cliente{
		var $cpf, $nome, $atributo, $vida, $mana, $dano, $forca, $agilidade, $inteligencia, $armadura, $velocidadeAtq, $mochila;
		/*function __construct(){
			$this->cpf = "";
			$this->nome = "";
			$this->salario = 0;
			$this->nasc = "";
		}*/
		
		function __construct($cpfv, $nomev, $atributov, $vidav, $manav, $danov, $forcav, $agilidadev, $inteligenciav, $armadurav, $velocidadeAtqv){
			$this->cpf = $cpfv;
			$this->nome = $nomev;
			$this->atributo = $atributov;
			//$this->vida = $vidav;
			$this->vida = 1000;
			//$this->mana = $manav;
			$this->mana = 1000;
			//$this->dano=$danov;
			$this->dano=60;
			//$this->forca=$forcav;
			$this->forca=30;
			//$this->agilidade=$agilidadev;
			$this->agilidade=30;
			//$this->inteligencia=$inteligenciav;
			$this->inteligencia=30;
			//$this->armadura=$armadurav;
			$this->armadura=10;
			//$this->velocidadeAtq=$velocidadeAtqv;
			$this->velocidadeAtq=10;
			//$this->mochila = __instanciaMochila();
		}
		private function __instanciaMochila(){
			//INSTANCIA UMA NOVA MOCHILA
			return 10;
		} 



		function getCpf(){
			return $this->cpf;
		}
		function setCpf($cpfv){
			$this->cpf = $cpfv;
		}

		function getNome(){
			return $this->nome;
		}
		function setNome($nomev){
			$this->nome = $nomev;
		}

		function getAtributo(){
			return $this->atributo;
		}
		function setAtributo($atributov){
			$this->atributo=$atributov;
		}

		function getDano(){
			return $this->dano;
		}
		function setDano($danov){
			$this->dano=$danov;
		}

		function getVida(){
			return $this->vida;
		}
		
		function setVida($vidav){
			$this->vida=$vidav;
		}

		function getMana(){
			return $this->mana;
		}
		
		function setMana($manav){
			$this->mana=$manav;
		}

		function getForca(){
			return $this->forca;
		}
		function setForca($forcav){
			$this->forca = $forcav;
		}

		function getAgilidade(){
			return $this->agilidade;
		}
		function setAgilidade($agilidadev){
			$this->agilidade = $agilidadev;
		}

		function getInteligencia(){
			return $this->inteligencia;
		}
		function setAtilidade($inteligenciav){
			$this->inteligencia = $inteligenciav;
		}

		function getArmadura(){
			return $this->armadura;
		}
		function setArmadura($armadurav){
			$this->armadura = $armadurav;
		}

		function getVelocidadeAtq(){
			return $this->velocidadeAtq;
		}
		function setVelocidadeAtq($velocidadeAtqv){
			$this->velocidadeAtq = $velocidadeAtqv;
		}



		function verMochila(){
			echo $this->cpf." , ".$this->nome." , \n Atributo Primario". $this->atributo." , \n Dano ".$this->dano."\n". $this->vida." de Vida  ".$this->mana." de Mana ".$this->forca." de forca ".$this->agilidade." de agilidade ".$this->inteligencia." de inteligencia \n".$this->armadura." de armadura ".$this->velocidadeAtq." de velocidade de Ataque \n";
				 
		}
	}


?>
