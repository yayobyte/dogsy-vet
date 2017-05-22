<?php

include_once('Config.php');

class Render
{
    private $header;
    private $navbar;
    private $footer;
    private $params;
    private $active;

    public function __construct($params=null, $pageName=null)
    {
        $this->header = \Config::header;
        $this->navbar = \Config::navbar;
        $this->footer = \Config::footer;
        $this->params = $params;
        $this->active = $pageName;
    }

    public function renderView($body)
    {
        require_once ($this->header);
        require_once ($this->navbar);
        require_once ($body);
        require_once ($this->footer);
    }

    public function renderPartial ($body)
    {
        require_once ($body);
    }

    public function renderHeader ()
    {
        require_once ($this->header);
        require_once ($this->navbar);
    }

    public function renderFooter ()
    {
        require_once ($this->footer);
    }
}

