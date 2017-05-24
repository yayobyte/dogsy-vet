<?php

include_once ('core/Orm.php');
class MedicalHistory extends BaseController
{
    public function __construct($params, $pageName)
    {
        parent::__construct($params, $pageName);
        $this->getData();
    }

    public function getData ($petString = null)
    {
        $orm = new Orm();
        $sql = "SELECT * FROM appointment as app
                    LEFT JOIN family as fam ON app.familia = fam.family_id
                    LEFT JOIN vet ON app.veterinario = vet.vet_id
                    LEFT JOIN client as cli ON app.cliente = cli.client_id
                    LEFT JOIN illness as ill ON app.enfermedad = ill.illness_id
                    LEFT JOIN pet ON app.mascota = pet.pet_id";
        if ($petString) {
            $sql .= " WHERE pet.alias LIKE '%".$petString."%'";
        }
        $sql .=";";
        $this->params['data'] = $orm->execute($sql);
        $orm->disconnect();
        $orm = null;
    }

    public function filterByPet ()
    {
        $this->getData($_POST['pet_string']);
        $this->render();
    }

}