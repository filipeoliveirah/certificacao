<?php
	session_start();	
	
	class Config {		
		private $user = 'root';
		private $password = 'root';
		private $db = 'dna_certificacao';
		private $host = 'localhost';
		private $port = 3306;		
	}
	
	class Certificacao extends Config{		
		
		var $pdo;
		function __construct(){
			$this->pdo = new PDO('mysql:host='.$this->host.$this->port.';dbname='.$this->db, $this->user, $this->password);		
		}

		function cadastrar($nomeDigitado, $emailDigitado, $senhaGerada){
			$stmt = $this->pdo->prepare("INSERT INTO cadastrousuario (nome, email, senha, aprovacao)
			VALUES (:nome, :email, :senha, :aprovacao)");
							  
			$stmt->bindValue(":nome", utf8_encode($nomeDigitado));
			$stmt->bindValue(":email", utf8_encode($emailDigitado));
			$stmt->bindValue(":senha", md5($senhaGerada));
			$stmt->bindValue(":aprovacao", "aguardando");
			
			if($stmt->execute()){
				return true;
			}else{
				return false;
			}			
		}

		function validarLogin($emailDigitado, $senhaDigitada){
			$stmt = $this->pdo->prepare("SELECT * FROM cadastrousuario WHERE email = :emailUser AND senha = :senhaUser");
			$stmt->bindValue(":emailUser", $emailDigitado);
			$stmt->bindValue(":senhaUser", md5($senhaDigitada));
			if($stmt->execute()){
				return true;
			}else{
				return false;
			}
		}

		function gerarSenha(){
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