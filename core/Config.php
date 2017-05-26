<?php
    class Config {
        const header = 'main/header.php';
        const footer = 'main/footer.php';
        const navbar = 'main/navbar.php';
        public $server ;
        public $port ;
        public $username ;
        public $password ;
        public $db ;

        public function __construct()
        {
            $this->server = getenv('OPENSHIFT_MYSQL_DB_HOST');
            $this->username = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
            $this->port = getenv('OPENSHIFT_MYSQL_DB_PORT');
            $this->password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
            $this->db =  'dogsy';
        }
    }