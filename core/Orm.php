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
        $this->connection = null;
        $this->connect();

    }

    public function connect ()
    {
        if (!$this->connection) {
            $this->connection = new PDO('mysql:host=' . $this->server . ';dbname=' . $this->db, $this->username, $this->password);
        }
    }

    public function getAll ($table)
    {
        return $this->connection->query('SELECT * from '.$table, PDO::FETCH_ASSOC);
    }

    public function insert ($table, $keys, $values)
    {
        $sql = 'INSERT INTO ' . $table . "(" . implode(",",$keys) . ") VALUES('" . implode("','",$values) . "')";
        $this->connection->exec($sql);
    }

    public function delete ($table, $id)
    {
        $sql = 'DELETE FROM ' . $table . " WHERE id=" . $id;
        $this->connection->exec($sql);
    }

    public function disconnect ()
    {
        $this->connection = null;
    }
}