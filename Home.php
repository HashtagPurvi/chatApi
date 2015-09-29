<?php

/**
 * Created by PhpStorm.
 * User: Purvi
 * Date: 28.9.15
 * Time: 22:10
 */
include_once ("ConnectDB.php");
include_once ("Register.php");

       $start = new Register();
   //     $start->db();
        $start->registerUsers();

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
