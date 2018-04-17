<!DOCTYPE html>
<html>
	<head>
		<title>Login | Certificação Dna de Vendas</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel="stylesheet" type="text/css"> 
	</head>

	<body class="bg-login">
		<?php		
			include('functions.php');
			$conn = new Certificacao();	
			if(isset($_SESSION['nomeCliente'])){
				header('Location: index.php');
				exit;
			}		
		?>		
		<form id="formulario" method="post" enctype="multipart/form-data" name="formulario">			
			<!--<img src="https://www.dnadevendas.com.br/wp-content/themes/dnadevendas/images/logo-dnadevendas.svg">-->
			<div class="logo-dna"><img src="https://www.dnadevendas.com.br/wp-content/themes/dnadevendas/images/logo-dnadevendas-white.svg"></div>
			<fieldset>
				
				<h2><?php echo $_SESSION['nomeCliente']; ?>Login: Certificação Produtividade de Vendas </h2>
				<h3>Insira corretamente seus dados para acessar prova de certificação</h3>
				<input type="email" placeholder="email" name="emailCliente">
				<input type="password" placeholder="senha" name="cSenhaCliente">
				
				<input type="submit" name="next1" class="next acao" value="Entrar"/>
				<a href="cadastro.php"><input type="text" name="next1" class="next acao" value="Primeiro Acesso" style="float: right"/></a>
			</fieldset>
			<div class="resp">
			</div>
		</form>
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script>
			$(function(){
				var formulario = $('form[name=formulario]');
				$('input[type=submit]').click(function(evento){
					var array = formulario.serializeArray();
					$.ajax({
						method: 'post',
						url: 'forms/validarLogin.php',
						data: {cadastrar: 'sim', campos: array},
						dataType: 'json',
						beforeSend: function(){
							$('.resp').html('<div class="ok"><p>Validando seus dados</p></div>');
						},
						success: function(valor){
							if(valor.erro == 'sim'){
								$('.resp').html('<div class="erros"><p>'+valor.getErro+'</p></div>');						
							}
							else{
								$('.resp').html('<div class="ok"><p>'+valor.mensagem+'</p>');
								setTimeout(function(){ 
									window.location.href = "index.php";
								}, 4000);
								
							}
						}
					});
					evento.preventDefault();
				});
			});
		</script>
		<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/66bbf119-95bf-48e1-a7e1-3626378a293f-loader.js" ></script>
	</body>


</html>