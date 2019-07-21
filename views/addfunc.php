<h2>Cadastro de Funcionarios</h2>
<br>
<form method="POST">

	<div class="form-group">
    	<label for="chapa">Chapa:</label>
    	<input type="text" class="form-control" name="chapa" id="chapa" required/>
 	</div>
	<div class="form-group">
    	<label for="name">Nome:</label>
    	<input type="text" class="form-control" name="name" id="name" required/>
 	</div>
 	<div class="form-group">
    	<label for="cpf">CPF:</label>
    	<input type="text" class="form-control" name="cpf" id="cpf" required/>
 	</div>
 	<div class="form-group">
    	<label for="rg">RG:</label>
    	<input type="text" class="form-control" name="rg" id="rg" required/>
 	</div>
 	<div class="form-group">
    	<label for="email">E-mail:</label>
    	<input type="email" class="form-control" name="email" id="email" required/>
 	</div>
 	<div class="form-row">
        <div class="col-md-6"> 
            <div class="form-group">
                <button class="btn btn-block btn-info" type="submit">Salvar</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <a class="btn btn-block btn-secondary" href="<?php echo BASE_URL; ?>">Voltar</a>
            </div>
        </div>
    </div>
</form>