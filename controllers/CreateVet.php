<?php

include_once ('core/Orm.php');
class CreateVet extends BaseController
{
    public function __construct($params, $pageName)
    {
        parent::__construct($params, $pageName);
        $this->getData();
    }

    public function getData ()
    {
        $orm = new Orm();
        $this->params['data'] = $orm->getAll('vet');
        $orm->disconnect();
        $orm = null;
    }
    public function createVet ()
    {
        $orm = new Orm();
        $orm->insert('vet', array_keys($_POST), array_values($_POST));
        $orm->disconnect();
        $this->getData();
        $this->render();
        $orm=null;
    }

    public function deleteVet ()
    {
        $orm = new Orm();
        $orm->delete('vet', $_GET['id']);
        $orm->disconnect();
        $this->getData();
        $this->render();
        $orm=null;
    }
}