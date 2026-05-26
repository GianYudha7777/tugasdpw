<?php
class Database {
    private $host  = "localhost";
    private $user  = "root";
    private $paswd = "";
    private $name  = "tugasdpw"; 
    public $con;

    public function __construct() {
        $this->con = new mysqli($this->host, $this->user, $this->paswd, $this->name);
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }
}
?>