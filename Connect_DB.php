<?php

/**
 * Created by PhpStorm.
 * User: Purvi
 * Date: 27.9.15
 * Time: 18:42
 */
//class Connect_DB
//{
//    private $server = "localhost";
//    private $userName = "root";
//    private $password ="RockitPurvi";
//    private $db = "chatapi";
//
//    public function __construct()
//    {}
//    public function connect()
//    {
//        $connection = mysqli_connect($this->server,$this->userName,$this>password );
//        if(!$connection)
//            echo"Failed to connect to the Server";
//
//        else {
//            $db = mysqli_select_db($this->db);
//            return true;
//        }
//    }
//}

$server = "localhost";
$userName = "root";
$password ="RockitPurvi";
$db = "chatapi";

$connection = mysqli_connect($server,$userName,$password );
if(!$connection)
       echo"Failed to connect to the Server";

else {
     $db = mysqli_select_db($connection,$db);

        }
