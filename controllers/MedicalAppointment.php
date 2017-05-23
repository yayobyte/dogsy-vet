<?php


class MedicalAppointment extends BaseController
{
    public function __construct($params, $pageName)
    {
        parent::__construct($params, $pageName);
        $this->init();
    }

    private function init()
    {
        $this->getData('vet');
        $this->getData('pet');
        $this->getData('client');
        $this->getData('illness');
    }

    private function getData ($table) {
        $orm = new Orm();
        $this->params[$table] = $orm->getAll($table);
        $orm->disconnect();
        $orm = null;
    }

    public function saveData ()
    {
        $orm = new Orm();
        $orm->insert('appointment', array_keys($_POST), array_values($_POST));
        $orm->disconnect();
        $this->init();
        $this->render();
        $orm=null;
    }
}