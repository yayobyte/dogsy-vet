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
        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'index.php?page=medicalhistory';  // change accordingly
        header("Location: http://$host$uri/$extra");
    }

    public function getFamilyDataFromClient (){
        $orm = new Orm();
        $sql = "SELECT family_id,apellido_familia FROM family as fam
                  INNER JOIN client as cli ON cli.familia = fam.family_id
                  WHERE cli.client_id =".$_GET['client_id'];
        $this->params['appointment'] = $orm->execute($sql);
        $result = $this->params['appointment']->fetchAll();
        $json=json_encode($result);
        $orm->disconnect();
        $orm = null;
        echo $json;
    }
}