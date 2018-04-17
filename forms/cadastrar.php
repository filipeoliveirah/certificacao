<?php
	include("../functions.php");
	$conn = new Certificacao();

	if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'):
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
			$nomeDigitado = $novos_campos['nomeCliente'];
			$emailDigitado = $novos_campos['emailCliente'];
			
			$senhaGerada = "dN@-de-V3nD@$";
			
			if($conn->cadastrar($nomeDigitado, $emailDigitado, $senhaGerada)){

				//$conn->enviarEmail($nomeDigitado, $emailDigitado, $senhaGerada);
				
				$respostas['erro'] = 'nao';
				$respostas['mensagem'] = 'Sucesso!</br>Você receberá um email com senha de acesso.';				
			}
			else{
				$respostas['erro'] = 'sim';
				$respostas['getErro'] = 'Não foi possível cadastrar';
			}
		}
		
		
		echo json_encode($respostas);
	endif;
?>