<br>
<div class="login-area">
<h2>Login</h2>

<?php if (!empty($msg)): ?>
	<div class="alert alert-warning">
  		<h5><?php echo $msg; ?></h5>
	</div>
	
<?php endif; ?>
	<form method="POST">
		<div class="form-group">
	    	<label for="user">Usuário:</label>
	    	<input type="text" class="form-control" name="user" id="user" required/>
	 	</div>
	 	<div class="form-group">
	    	<label for="pass">Senha:</label>
	    	<input type="text" class="form-control" name="pass" id="pass" required/>
	 	</div>
	 	<button class="btn btn-default" type="submit">Entrar</button>
</form>
</div>
