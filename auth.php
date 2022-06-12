<?php
require_once "functions.php";
$main = include_template("auth.php",[]);
$page = include_template("layout.php",['main'=>$main]);
print_r($page);