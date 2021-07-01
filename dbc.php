<?php

// phpinfo();

class DBcon {
    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;
    
    function __construct(string $host = "192.168.0.237",
                         string $db = 'k4db',
                         string $user = "root",
                         string $pass = "",
                         string $charset = 'utf8mb4') {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
        $this->charset = $charset;
    }

    function con() {
        $dbconn = new mysqli($this->$host,$this->$user,$this->$pass,$this->$db);

        if($dbconn->connect_error) {
            die("Database Connection Error, Error No.: ".$dbconn->connect_errno." | ".$dbconn->connect_error);
        } else {
            return $dbconn;
        } 
    }

}