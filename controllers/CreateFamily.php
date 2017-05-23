<?php

include_once ('core/Orm.php');
class CreateFamily extends BaseController
{
    public function __construct($params, $pageName)
    {
        parent::__construct($params, $pageName);
        $this->getData();
    }

    public function getData ()
    {
        $orm = new Orm();
        $this->params['data'] = $orm->getAll('family');
        $orm->disconnect();
        $orm = null;
    }
    public function createFamily ()
    {
        $orm = new Orm();
        $orm->insert('family', array_keys($_POST), array_values($_POST));
        $orm->disconnect();
        $this->getData();
        $this->render();
        $orm=null;
    }

    public function deleteFamily ()
    {
        $orm = new Orm();
        $orm->delete('family', $_GET['id']);
        $orm->disconnect();
        $this->getData();
        $this->render();
        $orm=null;
    }
}