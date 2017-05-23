<?php

include_once ('core/BaseController.php');

class Error extends BaseController
{
    private $errorCode;
    private $error;
    public function __construct($errorCode, $error)
    {
        parent::__construct(null,null);
        $this->errorCode = $errorCode;
        $this->error = $error;
    }

    public function render (){
        $view = new Render(array('errorCode' => $this->errorCode , 'error' => $this->error));
        $view->renderView('views/error.php');
    }
}