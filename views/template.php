<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Sparrows BSM</title>
		<link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/etm.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <!-- Brand -->
			    <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Sparrows BSM</a>

			    <!-- Toggler/collapsibe Button -->
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			        <span class="navbar-toggler-icon"></span>
			    </button>

			    <!-- Navbar links -->
			    <div class="collapse navbar-collapse" id="collapsibleNavbar">
			        <ul class="navbar-nav">
			            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cadastro</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>equipamentos/addequi/">Equipamentos</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>funcionarios/addfunc/">Funcionarios</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>usuarios/adduser">Usuarios</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Movimentação</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>emprestimo/">Emprestimo de Equipamentos</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>emprestimo/desembarque/">Devolução de Equipamentos</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Relatorios</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" target="_blank" href="<?php echo BASE_URL;?>report/reportemb/">Equipamentos Embarcados</a>
                                <a class="dropdown-item" target="_blank" href="<?php echo BASE_URL;?>report/reportdesemb/">Equipamentos Disponivel</a>
                                <a class="dropdown-item" target="_blank" href="<?php echo BASE_URL;?>report/historico/">Historico de Embarque</a>
                            </div>
                        </li>
                        
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>login/logout/">Logout</a>
                        </li>
			    	</ul>
			    </div> 
			</nav>
		</div>
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