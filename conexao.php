<?php

$host = "localhost";
$name = "root";
$pass = "";
$db = "usuarios";

$mysqli = new mysqli($host, $name, $pass, $db);

if($mysqli->connect_errno) {
    die("Falha ao conectar ao banco de dados");
}