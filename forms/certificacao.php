<?php
	session_start();
	include("../functions.php");
	$conn = new Certificacao();
	
	if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'):
	    $novos_campos = array();
	    $campos_post = $_POST['campos'];
	    $respostas = array();
	    foreach ($campos_post as $indice => $valor) {
	    	$novos_campos[$valor['name']] = $valor['value']; 	
		}
				
		for($esc = 1; $esc <= 20; $esc++){			
			$resultado += $novos_campos['escolha'.$esc];
		}
		$esc -=1;
		$resultado = ($resultado / $esc) * 10;
		//$resultado = round($resultado, 1);
		if($resultado >= 8){
			$respostas['erro'] = 'nao';
			$respostas['mensagem'] = 'Aprovado! Nota:' . $resultado;
			$_SESSION['aprovado'] = 'sim';
		}

		else{
			$respostas['erro'] = 'sim';
			$respostas['getErro'] = 'Você não foi aprovado! ' . $resultado . 'Pontos';
			$_SESSION['aprovado'] = 'nao';
		}			
		
	echo json_encode($respostas);
	endif;
?>