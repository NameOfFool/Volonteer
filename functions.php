<?php
function conn(): mysqli
{
    return new mysqli('127.0.0.1','root','','volonteers');
}
function include_template($name,$data): bool|string
{
    if(isset($_COOKIE['user']))
    {
        $c = conn();
        $query = "SELECT * FROM user 
    left join needy n on user.ID_User = n.ID_User
        left join organization o on user.ID_User = o.ID_User
    left join volonteer v on user.ID_User = v.ID_User
    where Email='".$_COOKIE['user']."'";
        $result = $c->query($query);
        $c->close();
        $row = $result->fetch_array();
        $user = $row['Sec_Name']." ".$row['Name'];
        $cab=null;
        if(!is_null($row['ID_Needy']))
            $cab="1.php";
        if(!is_null($row['ID_Organization']))
            $cab="2.php";
        if(!is_null($row['ID_Volonteer']))
            $cab = "vol_account.php";
        $data['user']=$user;
        $data['cab']=$cab;
    }
    $name="assets/templates/".$name;
    if(!file_exists($name))
        return $name;
    ob_start();
    extract($data);
    require($name);
    return ob_get_clean();
}
