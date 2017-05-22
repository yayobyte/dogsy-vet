<?php

include_once ('core/Render.php');
include_once ('core/Orm.php');
abstract class BaseController
{
    protected $pageName;

    public function __construct($params=null,$pageName=null)
    {
        $this->pageName = $pageName;
    }

    public function render()
    {
        $view = new Render(null,$this->pageName);
        $view->renderView('views/'.$this->pageName.'.php');
    }

}