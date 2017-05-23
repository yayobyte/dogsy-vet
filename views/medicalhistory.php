<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Familias</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
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
                                <td><?php echo $row['family_id']?></td>
                                <td><?php echo $row['apellido_familia']?></td>
                                <td><?php echo $row['numero_cuenta']?></td>
                                <td><?php echo $row['telefono']?></td>
                                <td><?php echo $row['direccion']?></td>
                                <td><?php echo $row['nombres']?></td>
                                <td><?php echo $row['dni_personas']?></td>
                                <td><a class="btn btn-danger btn-xs" onclick="" href="?page=createfamily&action=deletefamily&id=<?php echo $row['family_id']?>">Borrar</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="col-sm-12 text-center">
                        <div class="btn btn-success" onclick="$('#modal').modal('show')">Insertar</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 text-center">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Advertencia! </strong>Si una mascota o un cliente es asignado a una familia, esta no pordr&aacute; ser borrada
            </div>
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

                <form class="form-horizontal" action="?page=createfamily&action=createfamily" method="post" id="createFamilyForm">
                    <fieldset>
                        <legend>Familia</legend>
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
                            <label for="inputTelefono" class="col-lg-2 control-label">Telefono</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputTelefono" placeholder="Telefono" name="telefono">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDireccion" class="col-lg-2 control-label">Direccion</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputColor" placeholder="Direccion" name="direccion">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNombres" class="col-lg-2 control-label">Nombres</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputNombres" placeholder="Nombres" name="nombres">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDniPersonas" class="col-lg-2 control-label">DNI personas</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputDniPersonas" placeholder="DNI Personas" name="dni_personas">
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="$('#createFamilyForm').submit()">Guardar</button>
            </div>
        </div>
    </div>
</div>
