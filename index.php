<!DOCTYPE html>
<html>
	<head>
		<title>Certificação Mini Curso Produtividade de Vendas</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<?php
			session_start();
			include('functions.php');
			$conn = new Certificacao();
			if(!isset($_SESSION['nomeCliente'])){
				header('Location: login.php');
				exit;
			}
		?>
				
		<form id="formulario" method="post" enctype="multipart/form-data" name="formulario">
			
			<!--<img src="https://www.dnadevendas.com.br/wp-content/themes/dnadevendas/images/logo-dnadevendas.svg">-->
			<div class="logo-dna"><img src="https://www.dnadevendas.com.br/wp-content/themes/dnadevendas/images/logo-dnadevendas-white.svg"></div>
			<fieldset>
				<h2>Certificação: Produtividade de Vendas</h2>
				<h3>1) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha1">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>

				<h3>2) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha2">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>

				<h3>3) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha3">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>

				<h3>4) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha4">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>
				<input type="button" name="next1" class="next acao" value="Próximo"/>
			</fieldset>

			<fieldset>
				<h2>Certificação: Mini Curso de Vendas</h2>
				<h3>5) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha5">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>

				<h3>6) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha6">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>

				<h3>7) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha7">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>

				<h3>8) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha8">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>
				<input type="button" name="prev" class="prev acao" value="Anterior"/>
				<input type="button" name="next2" class="next acao" value="Próximo"/>
			</fieldset>

			<fieldset>
			<h2>Certificação: Mini Curso de Vendas</h2>
				<h3>9) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha9">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>

				<h3>10) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha10">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>

				<h3>11) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha11">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>

				<h3>12) Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur?</h3>
				<div class="escolhas">
					<select name="escolha12">
						<option value="">Escolha uma opção</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="0">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
						<option value="1">Lorem ipsum dolor sit amet, vis cu tractatos ocurreret referrentur</option>
					</select> 
				</div>
				<input type="button" name="prev" class="prev acao" value="Anterior"/>
				<input type="submit" name="next" class="acao" value="Enviar"/>
			</fieldset>
			<div class="resp">
			</div>
			<ul id="progress">
				<li class="ativo">Etapa 1</li>
				<li>Etapa 2</li>
				<li>Etapa 3</li>
			</ul>
		</form>
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
		<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/66bbf119-95bf-48e1-a7e1-3626378a293f-loader.js" ></script>
	</body>


</html>