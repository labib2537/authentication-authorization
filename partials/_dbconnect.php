<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "user";

$connect = mysqli_connect($server, $username, $password, $database);

if(!$connect){
//     echo "success";
// }else{
    die("error". mysqli_connect_error());
}