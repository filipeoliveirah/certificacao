<!DOCTYPE html>
<html>
	<head>
		<title>Certificação Minicurso Produtividade de Vendas</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>

	<body class="bg-base">
		<?php
			include('functions.php');
			$conn = new Certificacao();
			if(!isset($_SESSION['nomeCliente'])){
				header('Location: login.php');
				exit();
			}
			
		?>
				
		<form id="formulario" method="post" enctype="multipart/form-data" name="formulario">
			
			<!--<img src="https://www.dnadevendas.com.br/wp-content/themes/dnadevendas/images/logo-dnadevendas.svg">-->
			<div class="logo-dna"><img src="https://www.dnadevendas.com.br/wp-content/themes/dnadevendas/images/logo-dnadevendas-white.svg"></div>
			<fieldset>
			<h1>Certificação: Minicurso Produtividade de Vendas</h1>
				<h4>Boa sorte, <?php echo $_SESSION['nomeCliente']; ?></h4>
				<h3>1) Se ao dobrar o número de seus vendedores você conseguiu dobrar também suas vendas, isso significa que sua produtividade de vendas aumentou?</h3>
				<div class="escolhas">
					<select name="escolha1">
						<option value="">Escolha uma opção</option>
						<option value="0">Verdadeiro</option>
						<option value="1">Falso</option>
					</select> 
				</div>

				<h3>2) Os 4 pilares de vendas são: pessoas, processo, gestão e metas.</h3>
				<div class="escolhas">
					<select name="escolha2">
						<option value="">Escolha uma opção</option>
						<option value="0">Verdadeiro</option>
						<option value="1">Falso</option>
					</select> 
				</div>

				<h3>3) Os 7 elementos de um vendedor de sucesso são: otimismo, objetivos, foco, conhecimento, persistência, entusiasmo e humildade.</h3>
				<div class="escolhas">
					<select name="escolha3">
						<option value="">Escolha uma opção</option>
						<option value="1">Verdadeiro</option>
						<option value="0">Falso</option>
					</select> 
				</div>

				<h3>4) A definição de um processo de vendas faz com que os vendedores demorem mais tempo para bater as metas.</h3>
				<div class="escolhas">
					<select name="escolha4">
						<option value="">Escolha uma opção</option>
						<option value="0">Verdadeiro</option>
						<option value="1">Falso</option>
					</select> 
				</div>

				<h3>5) O funil de vendas não pode ser complexo. Precisa ser objetivo e ter gatilhos de passagem bem definidos.</h3>
				<div class="escolhas">
					<select name="escolha5">
						<option value="">Escolha uma opção</option>
						<option value="1">Verdadeiro</option>
						<option value="0">Falso</option>
					</select> 
				</div>
				<input type="button" name="next1" class="next acao" value="Próximo" style="float: right"/>
			</fieldset>

			<fieldset>
			<h1>Certificação: Minicurso produtividade de Vendas</h1>
				<h3>6) As metas devem sempre ser desafiadoras, independente se há ou não estrutura na empresa para realizá-las.</h3>
				<div class="escolhas">
					<select name="escolha6">
						<option value="">Escolha uma opção</option>
						<option value="0">Verdadeiro</option>
						<option value="1">Falso</option>
					</select> 
				</div>

				<h3>7) As metas intermediárias são importantes para uma alta performance em vendas.</h3>
				<div class="escolhas">
					<select name="escolha7">
						<option value="">Escolha uma opção</option>
						<option value="1">Verdadeiro</option>
						<option value="0">Falso</option>
					</select> 
				</div>

				<h3>8) As planilhas no Excel são ótimas ferramentas de gestão das vendas da empresa.</h3>
				<div class="escolhas">
					<select name="escolha8">
						<option value="">Escolha uma opção</option>
						<option value="0">Verdadeiro</option>
						<option value="1">Falso</option>
					</select> 
				</div>

				<h3>9) As competências de um vendedor estão relacionadas aos seus conhecimentos, habilidades e atitudes.</h3>
				<div class="escolhas">
					<select name="escolha9">
						<option value="">Escolha uma opção</option>
						<option value="1">Verdadeiro</option>
						<option value="0">Falso</option>
					</select> 
				</div>

				<h3>10) Operações de vendas devem ser pautadas por métricas confiáveis e pela possibilidade de mensuração instantânea.</h3>
				<div class="escolhas">
					<select name="escolha10">
						<option value="">Escolha uma opção</option>
						<option value="1">Verdadeiro</option>
						<option value="0">Falso</option>
					</select> 
				</div>
				<input type="button" name="prev" class="prev acao" value="Anterior"/>
				<input type="button" name="next2" class="next acao" value="Próximo" style="float: right"/>
			</fieldset>

			<fieldset>
			<h2>Certificação: Minicurso produtividade de Vendas</h2>
				<h3>11) Um dos problemas da planilha de vendas no Excel é o tempo que os vendedores e o gestor perdem para atualizá-as.</h3>
				<div class="escolhas">
					<select name="escolha11">
						<option value="">Escolha uma opção</option>
						<option value="1">Verdadeiro</option>
						<option value="0">Falso</option>
					</select> 
				</div>

				<h3>12) A produtividade de vendas não se relaciona exclusivamente ao aumento das vendas, mas em vender mais com os mesmos recursos</h3>
				<div class="escolhas">
					<select name="escolha12">
						<option value="">Escolha uma opção</option>
						<option value="1">Verdadeiro</option>
						<option value="0">Falso</option>
					</select> 
				</div>

				<h3>13) Processos de vendas bem desenhados guiam os vendedores da estratégia à execução, diminuindo os gaps operacionais. </h3>
				<div class="escolhas">
					<select name="escolha13">
						<option value="">Escolha uma opção</option>
						<option value="1">Verdadeiro</option>
						<option value="0">Falso</option>
					</select> 
				</div>

				<h3>14) O funil de vendas não possibilita analisar os dados gerais da equipe de vendas, mas apenas de cada vendedor individualmente.</h3>
				<div class="escolhas">
					<select name="escolha14">
						<option value="">Escolha uma opção</option>
						<option value="0">Verdadeiro</option>
						<option value="1">Falso</option>
					</select> 
				</div>

				<h3>15) O funil de vendas precisa ser estático e inflexível para apresentar resultados.</h3>
				<div class="escolhas">
					<select name="escolha15">
						<option value="">Escolha uma opção</option>
						<option value="0">Verdadeiro</option>
						<option value="1">Falso</option>
					</select> 
				</div>
				<input type="button" name="prev" class="prev acao" value="Anterior"/>
				<input type="button" name="next3" class="acao" value="Próximo" style="float: right"/>				
			</fieldset>

			<fieldset>
			<h2>Certificação: Minicurso produtividade de Vendas</h2>
				<h3>16) O CRM de Vendas é uma ferramenta indispensável para quem deseja ter produtividade de vendas.</h3>
				<div class="escolhas">
					<select name="escolha16">
						<option value="">Escolha uma opção</option>
						<option value="1">Verdadeiro</option>
						<option value="0">Falso</option>
					</select> 
				</div>

				<h3>17) A única taxa de conversão que precisa ser observada no funil de vendas é entre a primeira e a última etapa.</h3>
				<div class="escolhas">
					<select name="escolha17">
						<option value="">Escolha uma opção</option>
						<option value="0">Verdadeiro</option>
						<option value="1">Falso</option>
					</select> 
				</div>

				<h3>18) Os gatilhos de passagem entre as fases do funil não precisam ser os mesmos para todos os vendedores.</h3>
				<div class="escolhas">
					<select name="escolha18">
						<option value="">Escolha uma opção</option>
						<option value="0">Verdadeiro</option>
						<option value="1">Falso</option>
					</select> 
				</div>

				<h3>19) Não há necessidade que se faça os 4 pilares (pessoas, processos, gestão e tecnologia) para alcançar a produtividade de vendas, basta um.</h3>
				<div class="escolhas">
					<select name="escolha19">
						<option value="">Escolha uma opção</option>
						<option value="0">Verdadeiro</option>
						<option value="1">Falso</option>
					</select> 
				</div>

				<h3>20) É importante que o time de marketing e vendas estejam alinhados.</h3>
				<div class="escolhas">
					<select name="escolha20">
						<option value="">Escolha uma opção</option>
						<option value="1">Verdadeiro</option>
						<option value="0">Falso</option>
					</select> 
				</div>
				<input type="button" name="prev" class="prev acao" value="Anterior"/>
				<input type="submit" name="next" class="acao" value="Enviar" style="float: right"/>				
			</fieldset>
			<div class="resp">
			</div>
			<ul id="progress">
				<li class="ativo"></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</form>
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
		<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/66bbf119-95bf-48e1-a7e1-3626378a293f-loader.js" ></script>
	</body>


</html>