<?php
    namespace VET;
    include_once ('controllers/Home.php');
    class Index {

        public function run(){
            if (isset($_GET['page']))
            {
                $page = $_GET['page'];
                if (class_exists($page))
                {
                    new $page;
                }else{
                    new Home();
                }
            }else{
                new Home();
            }
        }
    }

    $program = new Index();
    $program->run();

