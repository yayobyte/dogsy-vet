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
        $config = new Config();
        $this->server =  $config->server;
        $this->port =  $config->port;
        $this->username =  $config->username;
        $this->password =  $config->password;
        $this->db = $config->db;
        $this->connection = null;
        $this->connect();

    }

    public function connect ()
    {
        if (!$this->connection) {
            try {
                $this->connection = new PDO('mysql:host=' . $this->server . ';port='.$this->port.';dbname=' . $this->db, $this->username, $this->password);
            }catch (PDOException $e) {
                print 'Error message: '.$e->getMessage() . ' - Error Code: ' . $e->getCode() . ' - Error info: ' . $e->errorInfo;
                die();
            }
        }
    }

    public function getAll ($table)
    {

        try {
                $array = $this->connection->query('SELECT * from '.$table, PDO::FETCH_ASSOC);
            }catch (PDOException $e) {
                print 'Error message: '.$e->getMessage() . ' - Error Code: ' . $e->getCode() . ' - Error info: ' . $e->errorInfo;
                die();
            }
            return $array;
    }

    public function insert ($table, $keys, $values)
    {
        $sql = 'INSERT INTO ' . $table . "(" . implode(",",$keys) . ") VALUES('" . implode("','",$values) . "')";
        $this->connection->exec($sql);
    }

    public function delete ($table, $id)
    {
        $sql = 'DELETE FROM ' . $table . " WHERE ".$table."_id=" . $id;
        $this->connection->exec($sql);
    }

    public function disconnect ()
    {
        $this->connection = null;
    }

    public function execute ($sql)
    {
        $prepare = $this->connection->prepare($sql);
        $prepare->execute();
        return $prepare;
    }
}