<?php
	session_start();	
	
	class Config {		
		private $user = 'root';
		private $password = 'root';
		private $db = 'dna_certificacao';
		private $host = 'localhost';
		private $port = 3306;		
		/*
		private $user = 'root';
		private $password = 'fZBy8NhelGwQNS';
		private $db = 'dna_certificacao';
		private $host = 'pro-ciapipe.c6kc9wk9fak1.us-west-2.rds.amazonaws.com';
		private $port = 3306;*/	
				
	}
	
	class Certificacao extends Config{
		
		var $pdo;
		public function __construct(){
			$this->pdo = new PDO('mysql:host='.$this->host.$this->port.';dbname='.$this->db, $this->user, $this->password);
		}

		public function cadastrar($nomeDigitado, $emailDigitado){
			$stmt = $this->pdo->prepare("INSERT INTO cadastrousuario (nome, email) VALUES (:nome, :email)");
							  
			$stmt->bindValue(":nome", $nomeDigitado);
			$stmt->bindValue(":email", $emailDigitado);
			$run = $stmt->exec();
		}

		public function validarLogin($emailDigitado, $senhaDigitada){
			$stmt = $this->pdo->prepare("SELECT email, senha FROM cadastrousuario WHERE email = :emailUser
			AND senha = :senhaUser");
			$stmt->bindValue(":emailUser", "filipeoliveirah@gmail.com");
			$stmt->bindValue(":senhaUser", "12002000");
			if($stmt->execute()){				
				return true;
			}else{
				return false;
			}
		}
		
		public function gerarSenha(){
			$length = 10;
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}
	}
	//FIM CLASS CERTIFICACAO
?>