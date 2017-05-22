<?php


class CreatePet extends BaseController
{
    public function __construct($params, $pageName)
    {
        parent::__construct($params, $pageName);
    }

    public function createPet ()
    {
        $orm = new Orm();
        $orm->connect();
        foreach($orm->getAll('pet') as $row)
        {
            print_r($row);
        }
        $orm->disconnect();
    }
}