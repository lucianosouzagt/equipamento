<h2>Embarque de Equipamentos</h2>
<br>
<form method="POST">
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="func">Funcionario:</label>
                <select class="form-control" name="func"id="func">
                    <option></option>
                    <?php foreach($info as $func): ?>
                        <option value="<?php echo $func['id']; ?>"><?php echo $func['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="solicitante">Solicitante:</label>
                <input type="text" class="form-control" name="solicitante" id="solicitante"  required/>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="bp">BP:</label>
                <input type="text" class="form-control" name="bp" id="bp" value="<?php echo $list['bp']?>" required readonly/>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="sn">Serial:</label>
                <input type="text" class="form-control" name="sn" id="sn" value="<?php echo $list['sn']?>" required readonly/>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca" id="marca" value="<?php echo $list['marca']?>" required readonly/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" name="modelo" id="modelo"  value="<?php echo $list['modelo']?>"required readonly/>
            </div>
        </div>
    </div>
    <div class="form-row">   
        <div class="form-group">
            <div class="col-md-11"> 
                <button class="btn btn-info" type="submit">Salvar</button>
            </div>
            <div class="col-md-1">
                <button class="btn btn-default" type="submit"><a href="<?php echo BASE_URL; ?>">Voltar</a></button>
            </div>
        </div>
    </div>
</form>