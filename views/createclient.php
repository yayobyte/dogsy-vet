<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Clientes</h1>
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
                            <th>Nombre</th>
                            <th>dni</th>
                            <th>Familia</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->params['data'] as $row):?>
                            <tr>
                                <td><?php echo $row['client_id']?></td>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['dni']?></td>
                                <td><span class="text-warning"><?php echo $row['apellido_familia']?></span></td>
                                <td><a class="btn btn-danger btn-xs" onclick="" href="?page=createclient&action=deleteclient&id=<?php echo $row['client_id']?>">Borrar</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <div class="btn btn-success " onclick="$('#modal').modal('show')">Insertar</div>
                    </div>
                </div>
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

                <form class="form-horizontal" action="?page=createclient&action=createclient" method="post" id="createClientForm">
                    <fieldset>
                        <legend>Cliente</legend>
                        <div class="form-group">
                            <label for="inputNombre" class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selectFamilia" class="col-lg-2 control-label">Familia</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="familia" id="selectFamilia">
                                    <?php foreach ($this->params['family'] as $row):?>
                                        <option value="<?php echo $row['family_id']?>"><?php echo $row['apellido_familia']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDni" class="col-lg-2 control-label">Dni</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" id="inputDni" placeholder="Dni" name="dni">
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="$('#createClientForm').submit()">Guardar</button>
            </div>
        </div>
    </div>
</div>
