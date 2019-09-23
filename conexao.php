<?php

$server = "localhost";
$db = "projeto";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
