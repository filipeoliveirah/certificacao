<?php
	
	include_once("../functions.php");
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
			if($conn->validarLogin($novos_campos['emailCliente'], $novos_campos['cSenhaCliente'])){				
				$dadosCliente = $conn->dadosCliente($novos_campos['emailCliente'], $novos_campos['cSenhaCliente']);
				$_SESSION['idCliente'] = $dadosCliente['id'];
				$_SESSION['nomeCliente'] = utf8_decode($dadosCliente['nome']);
				$_SESSION['emailCliente'] = $dadosCliente['email'];
				
				$respostas['erro'] = 'nao';
				$respostas['mensagem'] = 'Login feito com sucesso!</br> Você será redirecionado.';
			}else{
				$respostas['erro'] = 'sim';
				$respostas['getErro'] = 'Dados inválidos. Tente novamente.';
			}
		}
		
		
		echo json_encode($respostas);
	}
?>