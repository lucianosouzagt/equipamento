<h2>Cadastro de Usuarios</h2>
<br>
<form method="POST">

	<div class="form-group">
    	<label for="user">Usuario:</label>
    	<input type="text" class="form-control" name="user" id="user" required/>
 	</div>
	<div class="form-group">
    	<label for="name">Nome:</label>
    	<input type="text" class="form-control" name="name" id="name" required/>
 	</div>
 	<div class="form-group">
    	<label for="email">E-email:</label>
    	<input type="email" class="form-control" name="email" id="email" required/>
 	</div>
 	<div class="form-group">
    	<label for="pass">Senha:</label>
    	<input type="password" class="form-control" name="pass" id="pass" required/>
 	</div>
 	<div class="form-group">
 	<div class="row">
 	<div class="col-md-11">	
		<button class="btn btn-info" type="submit">Salvar</button>
	</div>
	<div class="col-md-1">
		<button class="btn btn-default" type="submit"><a href="<?php echo BASE_URL; ?>">Voltar</a></button>
	</div>
	</div>
</form>