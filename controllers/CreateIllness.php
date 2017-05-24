<?php

include_once ('core/Orm.php');
class CreateIllness extends BaseController
{
    public function __construct($params, $pageName)
    {
        parent::__construct($params, $pageName);
        $this->getData();
    }

    public function getData ()
    {
        $orm = new Orm();
        $this->params['data'] = $orm->getAll('illness');
        $orm->disconnect();
        $orm = null;
    }
    public function createIllness ()
    {
        $orm = new Orm();
        $orm->insert('illness', array_keys($_POST), array_values($_POST));
        $orm->disconnect();
        $this->getData();
        $this->render();
        $orm=null;
    }

    public function deleteIllness ()
    {
        $orm = new Orm();
        $orm->delete('illness', $_GET['id']);
        $orm->disconnect();
        $this->getData();
        $this->render();
        $orm=null;
    }
}