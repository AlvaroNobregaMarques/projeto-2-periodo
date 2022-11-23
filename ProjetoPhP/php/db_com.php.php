<?php

$sname = "localhost";
$uname=  "root";
$password= "";

$db_name= "projeto";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "conexão falhada!";
}?>