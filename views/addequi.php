<h2>Cadastro de Equipamentos</h2>
<br>
<form method="POST">

	<div class="form-group">
    	<label for="bp">BP:</label>
    	<input type="text" class="form-control" name="bp" id="bp" required/>
 	</div>
	<div class="form-group">
    	<label for="sn">Serial:</label>
    	<input type="text" class="form-control" name="sn" id="sn" required/>
 	</div>
 	<div class="form-group">
    	<label for="marca">Marca:</label>
    	<input type="text" class="form-control" name="marca" id="marca" required/>
 	</div>
 	<div class="form-group">
    	<label for="modelo">Modelo:</label>
    	<input type="text" class="form-control" name="modelo" id="modelo" required/>
 	</div>
 	<div class="form-group">
    	<label for="date">Data:</label>
    	<input type="date" class="form-control" name="date" id="date" required/>
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