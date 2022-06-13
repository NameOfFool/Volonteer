<?php
require_once "functions.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $Email = $_POST['login'];
    $Password = $_POST['pass'];
        $conn = conn();
        $query = "select Sec_Name, Name,Password from user where Email='$Email'";
        $result = $conn->query($query);
        $user = $result->fetch_array();
        if(password_verify($Password,$user['Password']))
        {
            $Sec_name = $user['Sec_Name'];
            $Name = $user['Name'];
            setcookie("user", "$Email");
            header("location:index.php");
        }
}
{
    $main = include_template("auth.php", []);
    $page = include_template("layout.php", ['main' => $main]);
    print_r($page);
}