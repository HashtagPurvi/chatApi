<?php

/**
 * Created by PhpStorm.
 * User: Purvi
 * Date: 28.9.15
 * Time: 21:48
 */
class ConnectDB
{
    private $server = "";
    private $user = "";
    private $password = "";
    private $db = "";

    private $dbh;
    public function connect()
    {
        try {
            $this->dbh = new PDO("mysql:host=$this->server;dbname=$this->db", $this->user, $this->password);
            //echo "z";
            return $this->dbh;
        }
        catch(PDOException $err){
            echo $err->getMessage();
        }
    }
}