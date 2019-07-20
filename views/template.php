<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Sparrows BSM</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo BASE_URL; ?>">SPARROWS BSM</a>
			</div>
				<ul class="nav navbar-nav">
					<li class="dropdown">
				    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros
				    	<span class="caret"></span></a>
				    	<ul class="dropdown-menu">
				      		<li><a href="<?php echo BASE_URL; ?>equipamentos/addequi/">Equipamentos</a></li>
				      		<li><a href="<?php echo BASE_URL; ?>funcionarios/addfunc/">Funcionarios</a></li>		          
				      		<li><a href="<?php echo BASE_URL; ?>usuarios/adduser">Usuarios</a></li>
				    	</ul>
				  	</li>
				  	<li class="dropdown">
				    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Movimentação
				    	<span class="caret"></span></a>
				    	<ul class="dropdown-menu">
				    	  <li><a href="<?php echo BASE_URL; ?>emprestimo/">Emprestimo de Equipamento</a></li>
				    	  <li><a href="<?php echo BASE_URL; ?>emprestimo/desembarque/">Devolução de Equipamento</a></li>		          
				    	</ul>
				  	</li>
				  	<li><a href="<?php echo BASE_URL;?>report/">Relatorio</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				   	<li><a href="<?php echo BASE_URL; ?>login/logout/">Logout</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
		<?php
		$this->loadViewInTemplate($viewName, $viewData);
		?>
		</div>
		<footer>
			<p>todos os direitos reservados | <a href="https://www.linkedin.com/in/luciano-souza-b3752972/" target="_blank">Luciano Souza</a></p>
			<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
			<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
		</footer>
	</body>
</html>