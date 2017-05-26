<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Enfermedad</h1>
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
                            <th>Nombre Enfermedad</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->params['data'] as $row):?>
                            <tr>
                                <td><?php echo $row['illness_id']?></td>
                                <td><?php echo $row['nombre_enfermedad']?></td>
                                <td><a class="btn btn-danger btn-xs" onclick="" href="?page=CreateIllness&action=deleteIllness&id=<?php echo $row['illness_id']?>">Borrar</a></td>
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
</div>

<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Insertar</h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" action="?page=CreateIllness&action=createIllness" method="post" id="createIllness">
                    <fieldset>
                        <legend>Veterinarios</legend>
                        <div class="form-group">
                            <label for="inputEnfermedad" class="col-lg-2 control-label">Nombre Enfermedad</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEnfermedad" placeholder="Nombre enfermedad" name="nombre_enfermedad">
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="$('#createIllness').submit()">Guardar</button>
            </div>
        </div>
    </div>
</div>
