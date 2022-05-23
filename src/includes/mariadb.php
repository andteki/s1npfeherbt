<?php

include_once('config.php');

class Mariadb {
    public $con;
    public function connectDb() {
        global $db;
        $this->con = new mysqli($db['host'], $db['user'], $db['pass'], $db['name']);
        if($this->con->connect_error) {
            error_log('Hiba! A kapcsolódás sikertelen!');
            die;
        }
        return $this->con;
    }
    public function closeDb() {
        $this->con->close();
    }
}
