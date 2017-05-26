<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Consulta M&eacute;dica</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" action="?page=MedicalAppointment&action=saveData" method="post" id="medicalAppointmentForm">
                        <fieldset>
                            <legend>Datos del paciente</legend>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="selectVeterinario" class="col-lg-2 control-label">Veterinario</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="veterinario" id="selectVeterinario">
                                                <?php foreach ($this->params['vet'] as $row):?>
                                                    <option value="<?php echo $row['vet_id']?>"><?php echo $row['nombre_veterinario']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="selectMascota" class="col-lg-2 control-label">Mascota</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="mascota" id="selectMascota">
                                                <?php foreach ($this->params['pet'] as $row):?>
                                                    <option value="<?php echo $row['pet_id']?>"><?php echo $row['alias']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="selectCliente" class="col-lg-2 control-label">Cliente</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="cliente" id="selectCliente" onchange="changeFamily()">
                                                <?php foreach ($this->params['client'] as $row):?>
                                                    <option value="<?php echo $row['client_id']?>"><?php echo $row['nombre_cliente']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="form-group">
                                        <label for="selectFamilia" class="col-lg-2 control-label">Familia</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="familia" id="selectfamilia" readonly="">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <legend>Diag&oacute;stico</legend>
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4 ">
                                    <div class="form-group">
                                        <label for="selectEnfermedad" class="col-lg-2 control-label">Enfermedad</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="enfermedad" id="selectCliente">
                                                <?php foreach ($this->params['illness'] as $row):?>
                                                    <option value="<?php echo $row['illness_id']?>"><?php echo $row['nombre_enfermedad']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-group has-success">
                                        <label for="textArea" class="col-lg-2 control-label">Descripci&oacute;n</label>
                                        <div class="col-lg-12">
                                            <textarea class="form-control" rows="3" id="textArea" maxlength="255" name="descripcion"></textarea>
                                            <span class="help-block">Ingrese descripci&oacute;n de la consulta (255 caract&eacute;res)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 text-center">
                        <button type="button" class="btn btn-success btn-lg btn-block" onclick="$('#medicalAppointmentForm').submit()">Guardar</button>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">

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


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="$('#createClientForm').submit()">Guardar</button>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">

    $(document).ready(function () {
        changeFamily();
    });

    function changeFamily (){
        var clientId = $('#selectCliente').val();
        $.ajax( "?page=MedicalAppointment&action=getFamilyDataFromClient&client_id=" + clientId )
            .done(function(response) {
                var data = JSON.parse( response );
                $('#selectfamilia option').remove();
                $('#selectfamilia').append($('<option>', {
                    value: data[0].family_id,
                    text: data[0].apellido_familia
                }));
            });
    }

</script>