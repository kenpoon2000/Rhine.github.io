<?php

$hostname= "localhost";
$userid= "root";
$password = "";
$db_name = "";

$connect = mysqli_connect($hostname, $userid, $password, $db_name);

if (!$connect = mysqli_connect($hostname, $userid, $password, $db_name)) {

    die("Connection failed!");

}