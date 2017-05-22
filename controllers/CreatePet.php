<?php

include_once ('core/Orm.php');
class CreatePet extends BaseController
{
    public function __construct($params, $pageName)
    {
        parent::__construct($params, $pageName);
        $this->getData();
    }

    public function getData ()
    {
        $orm = new Orm();
        $this->params['data'] = $orm->getAll('pet');
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
}