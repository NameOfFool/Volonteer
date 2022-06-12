<?php
function include_template($name,$data)
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