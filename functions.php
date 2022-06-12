<?php
function include_template($name,$data): bool|string
{
    $user = "";
    $name="assets/templates/".$name;
    if(!file_exists($name))
        return $name;
    ob_start();
    extract($data);
    require($name);
    return ob_get_clean();
}
function conn(): mysqli
{
    return new mysqli('127.0.0.1','root','','volonteers');
}