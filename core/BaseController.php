<?php

include_once ('core/Render.php');
include_once ('core/Orm.php');
abstract class BaseController
{
    protected $pageName;
    protected $params;

    public function __construct($params,$pageName)
    {
        $this->pageName = $pageName;
        $this->params=$params;
    }

    public function render()
    {
        $view = new Render($this->params,$this->pageName);
        $view->renderView('views/'.$this->pageName.'.php');
    }

}