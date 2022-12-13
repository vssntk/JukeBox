<?php
class Database
{

    public $con;
    protected $host = 'localhost';
    protected $dbName = ''; //database name
    protected $username = 'root';
    protected $password = '';

    function __construct(){
        $this->con = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}
?>