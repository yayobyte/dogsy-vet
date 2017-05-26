<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Veterinarios</h1>
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
                            <th>Nombre Veterinario</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->params['data'] as $row):?>
                            <tr>
                                <td><?php echo $row['vet_id']?></td>
                                <td><?php echo $row['nombre_veterinario']?></td>
                                <td><a class="btn btn-danger btn-xs" onclick="" href="?page=CreateVet&action=deleteVet&id=<?php echo $row['vet_id']?>">Borrar</a></td>
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

                <form class="form-horizontal" action="?page=CreateVet&action=createVet" method="post" id="createVet">
                    <fieldset>
                        <legend>Veterinarios</legend>
                        <div class="form-group">
                            <label for="inputVeterinario" class="col-lg-2 control-label">Nombre Veterinario</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputVeterinario" placeholder="Veterinario" name="nombre_veterinario">
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="$('#createVet').submit()">Guardar</button>
            </div>
        </div>
    </div>
</div>
