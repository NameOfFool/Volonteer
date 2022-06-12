<?php
require_once "functions.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $Sec_name = $_POST['surname'];
    $Name = $_POST['name'];
    $Patro = $_POST['patronymic'];
    $DOB = $_POST['DOB'];
    $Address = $_POST['locality'];
    $Desc = $_POST['description'];
    $Soc = $_POST['social_protection'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Password = $_POST['pass'];
    $hash = password_hash($Password,PASSWORD_DEFAULT);
    if($Password=$_POST['pass_again'])
    {
        $conn = conn();
        $query = "insert into user values (null, '$Sec_name','$Name','$Email','$hash',now(),null,'$Patro')";
        $conn->query($query);
        $query = "insert into needy
    (Birth_Date,
     Phone,
     ID_User,
     Address,
     About,
     ID_Type)
values 
    ('$DOB','$Phone',(select ID_User from user where email='$Email'),'$Address','$Desc',(select ID_Type from socail_protection where Soc_Prot_Type='$Soc'));";
        $conn->query($query);
        print_r($query);
        setcookie("user","$Sec_name $Name");
        header("location:index.php");
    }
}
else
{
    $conn = conn();
    $query = "SELECT Soc_Prot_Type from socail_protection";
    $result = $conn->query($query);
    $types = [];
    while ($row = $result->fetch_array()) {
        $types[] = $row[0];
    }
    $main = include_template("get_help.php", ['types' => $types]);
    $page = include_template("layout.php", ['main' => $main]);
    print_r($page);
}