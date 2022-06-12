<?php
require_once "functions.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $Org = $_POST['org_name'];
    $Sec_name = $_POST['surname'];
    $Name = $_POST['name'];
    $Patro = $_POST['patronymic'];
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
        $query = "insert into organization
    (Organization_Address,
     Organization_Email,
     ID_User,
     Organization_Name) values ('$Address','$Email',(select ID_User from user where email='$Email'),'$Org');";
        $conn->query($query);
        print_r($query);
        setcookie("user","$Sec_name $Name");
        header("location:index.php");
    }
}
else
{
    $main = include_template("org_reg.php", []);
    $page = include_template("layout.php", ['main' => $main]);
    print_r($page);
}