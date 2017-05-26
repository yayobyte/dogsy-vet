<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Historia M&eacute;dica</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <form action="?page=MedicalHistory&action=filterByPet" method="post" id="medicalHistoryFilterForm">
                            <div class="form-group">
                                <div class="input-group has-success">
                                    <span class="input-group-addon">Buscar Mascota</span>
                                    <input type="text" class="form-control" name="pet_string">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="button" onclick="$('#medicalHistoryFilterForm').submit()">Buscar</button>
                                    </span>
                                    <span class="input-group-btn">
                                        <a href="?page=medicalhistory" class="btn btn-default" >Reestablecer</a>
                                    </span>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <table class="table table-striped table-hover ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Veterinario</th>
                            <th>Mascota</th>
                            <th>Familia</th>
                            <th>Cliente</th>
                            <th>Descripcion</th>
                            <th>Enfermedad</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->params['data'] as $row):?>
                            <tr>
                                <td><?php echo $row['appointment_id']?></td>
                                <td><span class="text-success"><?php echo $row['nombre_veterinario']?></span></td>
                                <td><?php echo $row['alias']?></td>
                                <td><span class="text-warning"><?php echo $row['apellido_familia']?></span></td>
                                <td><span class="text-warning"><?php echo $row['nombre_cliente']?></span></td>
                                <td><?php echo $row['descripcion']?></td>
                                <td><span class="text-danger"><?php echo $row['nombre_enfermedad']?></span></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>