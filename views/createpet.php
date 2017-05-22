<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Mascotas</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Alias</th>
                    <th>Especie</th>
                    <th>Raza</th>
                    <th>Color</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Peso Medio</th>
                    <th>Peso Actual</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->params['data'] as $row):?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['alias']?></td>
                        <td><?php echo $row['especie']?></td>
                        <td><?php echo $row['raza']?></td>
                        <td><?php echo $row['color']?></td>
                        <td><?php echo $row['fecha_nacimiento']?></td>
                        <td><?php echo $row['peso_medio']?></td>
                        <td><?php echo $row['peso_actual']?></td>
                        <td><a class="btn btn-danger btn-xs" onclick="" href="?page=createpet&action=deletepet&id=<?php echo $row['id']?>">Borrar</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="btn btn-success" onclick="$('#modal').modal('show')">Insertar</div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Insertar</h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" action="?page=createpet&action=createpet" method="post" id="createPetForm">
                    <fieldset>
                        <legend>Mascota</legend>
                        <div class="form-group">
                            <label for="inputAlias" class="col-lg-2 control-label">Alias</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputAlias" placeholder="Alias" name="alias">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEspecie" class="col-lg-2 control-label">Especie</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEspecie" placeholder="Especie" name="especie">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputRaza" class="col-lg-2 control-label">Raza</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputRaza" placeholder="Raza" name="raza">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputColor" class="col-lg-2 control-label">Color</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputColor" placeholder="Color" name="color">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputFechaNacimiento" class="col-lg-2 control-label">Fecha de nacimiento</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control" id="inputFechaNacimiento" placeholder="Fecha de nacimiento" name="fecha_nacimiento">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPesoMedio" class="col-lg-2 control-label">Peso Medio</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPesoMedio" placeholder="Peso Medio" name="peso_medio">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPesoActual" class="col-lg-2 control-label">Peso Actual</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPesoActual" placeholder="Peso Actual" name="peso_actual">
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="$('#createPetForm').submit()">Guardar</button>
            </div>
        </div>
    </div>
</div>
