<?php
namespace VET;
include_once ('Config.php');


class Render
{
    private $header;
    private $navbar;
    private $footer;

    public function __construct()
    {
        $this->header = \Config::header;
        $this->navbar = \Config::navbar;
        $this->footer = \Config::footer;
    }

    public function renderView($body)
    {
        require_once ($this->header);
        require_once ($this->navbar);
        require_once ($body);
        require_once ($this->footer);
    }
}