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
		<div class="login-header">
			<img src="<?php echo BASE_URL; ?>assets/images/logo.jpg">
		</div>
		<div class="login-area">
		<h2>Login</h2>
		<hr>
		<?php if (!empty($msg)): ?>
			<div class="alert alert-warning">
		  		<span><?php echo $msg; ?></span>
			</div>
			
		<?php endif; ?>
			<form method="POST">
				<div class="form-group">
			    	<label for="user">Usuário:</label>
			    	<input type="text" class="form-control" name="user" id="user" required/>
			 	</div>
			 	<div class="form-group">
			    	<label for="pass">Senha:</label>
			    	<input type="password" class="form-control" name="pass" id="pass" required/>
			 	</div>
			 	<div class="form-group">
			 		<button class="btn btn-block btn-default" type="submit">Entrar</button>
				</div>
			</form>
		</div>
		<footer>
			<p>todos os direitos reservados | <a href="https://www.linkedin.com/in/luciano-souza-b3752972/" target="_blank">Luciano Souza</a></p>
			<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
			<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
		</footer>
	</body>
</html>