<?php
function con(){
    $serverName = "localhost";
    $userName = "root";
    $pass = "";
    $dbName = "users";

    $conn= new mysqli($serverName,$userName,$pass,$dbName);

    return $conn;
}

?>