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
                <li <?php if ($this->active == 'createpet') { echo 'class="active"'; }?>><a href="?page=createpet">Mascotas</a></li>
                <li <?php if ($this->active == 'createclient') { echo 'class="active"'; }?>><a href="?page=createclient">Clientes</a></li>
                <li <?php if ($this->active == 'createfamily') { echo 'class="active"'; }?>><a href="?page=createfamily">Familias</a></li>
                <li <?php if ($this->active == 'medicalappointment') { echo 'class="active"'; }?>><a href="?page=medicalappointment">Consulta M&eacute;dica</a></li>
                <li <?php if ($this->active == 'medicalhystory') { echo 'class="active"'; }?>><a href="?page=medicalhistory">Historia C&iacute;nica</a></li>
            </ul>
        </div>
    </div>
</nav>