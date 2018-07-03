<?php
class DB
{
    //define the kinds of accessibility
    private $connection;
    private $servername;
    private $username;
    private $password;
    private $dbname;
    //give them Initial value
    public function __construct()
    {
        $this->servername = "localhost";
        $this->username   = "root";
        $this->password   = "";
        $this->dbname     = "myproject";
    }
    //set connection
    public function connect()
    {
        $this->connection = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        //setAttribute
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->connection;
    }
}