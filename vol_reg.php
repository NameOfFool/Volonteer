<?php
require_once "functions.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $Sec_name = $_POST['surname'];
    $Name = $_POST['name'];
    $Patro = $_POST['patronymic'];
    $DOB = $_POST['DOB'];
    $Address = $_POST['locality'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Password = $_POST['pass'];
    $hash = password_hash($Password,PASSWORD_DEFAULT);
    if($Password=$_POST['pass_again'])
    {
        $conn = conn();
        $query = "insert into user values (null, '$Sec_name','$Name','$Email','$hash',now(),null,'$Patro')";
        $conn->query($query);
        $query = "insert into volonteer
    (Birth_Date,
     Phone,
     ID_User,
     Address) values ('$DOB','$Phone',(select ID_User from user where email='$Email'),'$Address');";
        $conn->query($query);
        setcookie("user", "$Email");
        header("location:index.php");
    }
}
else
{
    $main = include_template("vol_reg.php", []);
    $page = include_template("layout.php", ['main' => $main]);
    print_r($page);
}