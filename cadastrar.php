<?php
	if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'):
	    $novos_campos = array();
	    $campos_post = $_POST['campos'];
	    $respostas = array();
	    foreach ($campos_post as $indice => $valor) {
	    	$novos_campos[$valor['name']] = $valor['value']; 	
		}
		
		$teste = true;		
		for($esc = 1; $esc <= 12; $esc++){			
			$resultado += $novos_campos['escolha'.$esc];
		}

		$resultado /= $esc;
		$resultado = round($resultado, 1);
		if($resultado >= 8){
			$respostas['erro'] = 'nao';
			$respostas['mensagem'] = 'Aprovado! Nota: ' . $resultado;
		}
		
     	/*if(!strstr($novos_campos['email'], '@')){
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'Email inválido';
     	}
     	elseif($novos_campos['senha'] != $novos_campos['csenha']){
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'As senhas informadas não correspondem';
     	}
     	elseif (!strstr($novos_campos['facebook'], 'http://')) {
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'Endereço de Facebook deve conter http://';
		}*/

		else{
			$respostas['erro'] = 'sim';
			$respostas['getErro'] = 'Você não foi aprovado! Nota: ' . $resultado;
		}			
		
	echo json_encode($respostas);
	endif;
?>