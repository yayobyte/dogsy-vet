<?php

class Orm
{
    private $connection;
    private $server;
    private $username;
    private $password;
    private $db;

    public function __construct()
    {
        $this->server = Config::server;
        $this->username = Config::username;
        $this->password = Config::password;
        $this->db = Config::db;
    }

    public function connect ()
    {
        try {
            $this->connection = new PDO('mysql:host='.$this->server.';dbname='.$this->db, $this->username, $this->password);

        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getAll ($table)
    {
        return $this->connection->query('SELECT * from '.$table, PDO::FETCH_ASSOC);
    }

    public function disconnect ()
    {
        $this->connection = null;
    }
}