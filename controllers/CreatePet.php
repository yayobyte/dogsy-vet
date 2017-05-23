<?php

include_once ('core/Orm.php');
class CreatePet extends BaseController
{
    public function __construct($params, $pageName)
    {
        parent::__construct($params, $pageName);
        $this->getData();
        $this->getFamily();
    }

    private function getData ()
    {
        $orm = new Orm();
        $sql = "select * from pet INNER JOIN family ON family.family_id = pet.familia;";
        $this->params['data'] = $orm->execute($sql);
        $orm->disconnect();
        $orm = null;
    }
    public function createPet ()
    {
        $orm = new Orm();
        $orm->insert('pet', array_keys($_POST), array_values($_POST));
        $orm->disconnect();
        $this->getData();
        $this->render();
        $orm=null;
    }

    public function deletePet ()
    {
        $orm = new Orm();
        $orm->delete('pet', $_GET['id']);
        $orm->disconnect();
        $this->getData();
        $this->render();
        $orm=null;
    }

    private function getFamily () {
        $orm = new Orm();
        $this->params['family'] = $orm->getAll('family');
        $orm->disconnect();
        $orm = null;
    }
}