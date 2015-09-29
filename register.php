<?php

/**
 * Created by PhpStorm.
 * User: Purvi
 * Date: 28.9.15
 * Time: 22:01
 */
include_once ("ConnectDB.php");

class Register
{
    private $sth;

    public function registerUsers(){

        $dbh = new ConnectDB();
        $dbh = $dbh->connect();

        if (isset($_POST['Register']))
        {
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $pwd = $_POST['password'];

           //   var_dump($firstName,$lastName,$email,$pwd);

            if ($firstName=='' or $lastName=='' or $email =='' or $pwd=='')
            {
                echo "<script>alert('Please enter all the fields')</script>";
                exit();
            }
            $insert_query = "INSERT INTO register (FirstName, LastName, email, password) VALUES ('$firstName','$lastName','$email','$pwd')";
            $sth = $dbh->prepare($insert_query);

            $result = $sth->execute();

            if ($result === TRUE) {
                echo "You are registerd succesfully";
            } else
                echo "404";
        }
    }
}