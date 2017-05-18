<?php
    namespace VET;
    include_once ('Render.php');

    class Index {

        public function run(){
            $view = new Render();
            $view->renderView('views/home.php');

        }
    }

    $program = new Index();
    $program->run();

