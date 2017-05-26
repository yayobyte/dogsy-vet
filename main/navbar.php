<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?page=home"><img src="img/logo.jpg"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php if ($this->active == 'CreateIllness') { echo 'class="active"'; }?>><a href="?page=CreateIllness">Enfermedad</a></li>
                <li <?php if ($this->active == 'CreateVet') { echo 'class="active"'; }?>><a href="?page=CreateVet">Veterinario</a></li>
                <li <?php if ($this->active == 'CreatePet') { echo 'class="active"'; }?>><a href="?page=CreatePet">Mascotas</a></li>
                <li <?php if ($this->active == 'CreateClient') { echo 'class="active"'; }?>><a href="?page=CreateClient">Clientes</a></li>
                <li <?php if ($this->active == 'CreateFamily') { echo 'class="active"'; }?>><a href="?page=CreateFamily">Familias</a></li>
                <li <?php if ($this->active == 'MedicalAppointment') { echo 'class="active"'; }?>><a href="?page=MedicalAppointment">Consulta M&eacute;dica</a></li>
                <li <?php if ($this->active == 'MedicalHistory') { echo 'class="active"'; }?>><a href="?page=MedicalHistory">Historia C&iacute;nica</a></li>
            </ul>
        </div>
    </div>
</nav>