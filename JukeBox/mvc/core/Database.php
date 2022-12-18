<?php
class Database
{

    public $connect;
    protected $host = 'localhost';
    protected $dbName = 'jukeboxmusic'; 
    protected $username = 'root';
    protected $password = '';

    function __construct(){
        $this->connect = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}
?>