<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Clientes</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Apellido Familia</th>
                    <th>N&uacute;mero De Cuenta</th>
                    <th>Tel&eacute;fono</th>
                    <th>Direccion</th>
                    <th>Nombres</th>
                    <th>DNI Personas</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->params['data'] as $row):?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['apellido_familia']?></td>
                        <td><?php echo $row['numero_cuenta']?></td>
                        <td><?php echo $row['telefono']?></td>
                        <td><?php echo $row['direccion']?></td>
                        <td><?php echo $row['nombres']?></td>
                        <td><?php echo $row['dni_personas']?></td>
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

                <form class="form-horizontal" action="?page=createclient&action=createclient" method="post" id="createClientForm">
                    <fieldset>
                        <legend>Cliente</legend>
                        <div class="form-group">
                            <label for="inputApellidoFamilia" class="col-lg-2 control-label">Apellido Familia</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputApellidoFamilia" placeholder="Apellido Familia" name="apellido_familia">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNumeroCuenta" class="col-lg-2 control-label">Numero de Cuenta</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputNumeroCuenta" placeholder="Numero de cuenta" name="numero_cuenta">
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
