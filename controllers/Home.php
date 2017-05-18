<?php
    namespace VET;
    include_once ('Render.php');
    class Home {
        public function __construct()
        {
            $view = new Render();
            $view->renderView('views/home.php');
        }


    }