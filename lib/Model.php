<?php

namespace app\lib;

use mysqli;

include_once ROOT."/config/db.php";

class Model{
    private $username;
    private $password;
    private $host;
    private $dbname;

    public function __construct()
    {
        $this->username=USERNAME;
        $this->password=PASSWORD;
        $this->host=HOST;
        $this->dbname=DBNAME;

        $mysqli = new mysqli($this->host,$this->username,$this->password,$this->dbname);
        if($mysqli->connect_error)
        {
            echo "connection Failed";
            exit;
        }
    }

}