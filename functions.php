<?php
	session_start();	
	
	class config {		
		var $user = 'root';
		var $password = 'root';
		var $db = 'dna_certificacao';
		var $host = 'localhost:';
		var $port = 3306;		
		/*
		var $user = 'root';
		var $password = 'fZBy8NhelGwQNS';
		var $db = 'dna_certificacao';
		var $host = 'pro-ciapipe.c6kc9wk9fak1.us-west-2.rds.amazonaws.com:';
		var $port = 3306;*/
				
	}
	
	class certificacao extends config{
		
		var $pdo;
		function __construct(){
			$this->pdo = new PDO('mysql:host='.$this->host.$this->port.';dbname='.$this->db, $this->user, $this->password); 
		}

		public function cadastrar($nomeDigitado, $emailDigitado, $senhaGerada){
			$stmt = $this->pdo->prepare("INSERT INTO cadastro(nome, email, senha, aprovacao) VALUES (:nome, :email, :senha, :aprovacao)");
							  
			$stmt->bindValue(":nome", $nomeDigitado);
			$stmt->bindValue(":email", $emailDigitado);
			$stmt->bindValue(":senha", $senhaGerada);
			$stmt->bindValue(":aprovacao", "Aguardando");
			if($run = $stmt->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function aprovarCertificacao($emailDigitado, $statusCertificacao){
			$stmt = $this->pdo->prepare("UPDATE cadastro SET (aprovacao = :aprovacao) WHERE email = :email");
							  
			$stmt->bindValue(":aprovacao", $statusCertificacao);
			$stmt->bindValue(":email", $emailDigitado);

			if($run = $stmt->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function validarLogin($emailDigitado, $senhaDigitada){
			$stmt = $this->pdo->prepare("SELECT email, senha FROM cadastro WHERE email = :emailUser
			AND senha = :senhaUser");
			$stmt->bindValue(":emailUser", $emailDigitado);
			$stmt->bindValue(":senhaUser", $senhaDigitada);
			$stmt->execute();
			if($stmt->rowCount() == 1){				
				return true;
			}else{
				return false;
			}
		}

		public function dadosCliente($emailDigitado, $senhaDigitada){
			$stmt = $this->pdo->prepare("SELECT * FROM cadastro WHERE email = :emailUser
			AND senha = :senhaUser");
			$stmt->bindValue(":emailUser", $emailDigitado);
			$stmt->bindValue(":senhaUser", $senhaDigitada);
			$stmt->execute();
			$rs = $stmt->fetch(PDO::FETCH_ASSOC);							
			return $rs;			
		}
		/*
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

		
		public function enviarEmail($nomeDigitado, $emailDigitado, $senhaGerada){
			ini_set('display_errors', 1); 
			error_reporting(E_ALL);			
			$from = "contato@dnadevendas.com.br";			
			$to = $emailDigitado;			
			$subject = "Dna de Vendas: Confirmando seu cadastro";			
			$message = "Olá, ".$nomeDigitado."este é um email para confirmação do seu cadastro. Copie a senha abaixo para acessar o portal de certificação.</br>Senha:" .$senhaGerada;			
			$headers = "De: contato@dnadevendas.com.br";			
			mail($to, $subject, $message, $headers);				
		}*/
	}
	//FIM CLASS CERTIFICACAO
?>