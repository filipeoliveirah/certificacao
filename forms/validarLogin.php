<?php
	session_start();
	include("../functions.php");
	$conn = new Certificacao();

	if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'){
	    $novos_campos = array();
	    $campos_post = $_POST['campos'];
	    $respostas = array();
	    foreach ($campos_post as $indice => $valor) {
	    	$novos_campos[$valor['name']] = $valor['value']; 	
		}		
     	if(!strstr($novos_campos['emailCliente'], '@')){
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'Email inválido';
     	}
     	/*elseif($_SESSION['senhaEnviadaPorEmail'] != $novos_campos['csenhaCliente']){
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'A senha informadas não correspondem';
		}*/
		
		else{			
			$emailDigitado = $novos_campos['emailCliente'];
			$senhaDigitada = $novos_campos['cSenhaCliente'];
			
			if($conn->validarLogin($emailDigitado, $senhaDigitada)){
				$respostas['erro'] = 'nao';
				$respostas['mensagem'] = 'Login feito com sucesso!</br> Você será redirecionado.';
				$_SESSION['nomeCliente'] = $novos_campos['nomeCliente'];
				$_SESSION['emailCliente'] = $novos_campos['emailCliente'];
			}else{
				$respostas['erro'] = 'sim';
				 $respostas['getErro'] = 'Dados inválidos. Tente novamente.';
			}
		}
		
		
		echo json_encode($respostas);
	}
?>