<?php
/**
 * Created by PhpStorm.
 * User: Purvi
 * Date: 27.9.15
 * Time: 18:02
 */

include_once("Connect_DB.php");

//class Register
//{
//    public function __construct(){}
//
//    $connect = new Connect_DB();
//
//    $connect->connect();
    if (isset($_POST['Register']))
    {

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    //    var_dump($firstName,$lastName,$email,$pwd);

    if ($firstName=='' or $lastName=='' or $email =='' or $pwd=='')
    {
    echo "<script>alert('Please enter all the fields')</script>";
    exit();
    }
        $insert_query = "INSERT INTO `'register'(FirstName, LastName, email, password) VALUES ('$firstName','$lastName','$email','$pwd')";
        $result = mysqli_query($connection,$insert_query);
        
        echo $result;


//    if ($result == TRUE) {
//        echo "You are registerd succesfully";
//    } else
//        echo "404";
    }
//}
?>

<form action="" method="post">
    <fieldset name="register" id="register">
            <legend>Register</legend>
            <label for="firstname">FirstName </label>
            <input id="firstname" type="text" name="firstname">
            <br>
            <label for="lastname">LastName</label>
            <input type="text" name="lastname" id="lastname">
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="pwd">PassWord</label>
            <input type="password" id="pwd" name="password">
            <br>
    </fieldset>
       <input type="submit" name="Register" value="Register">
</form>



