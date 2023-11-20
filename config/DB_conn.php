<?php

$hostName = "localhost";
$username = "root";
$password = "";
$database = "opti";
$con = mysqli_connect($hostName, $username, $password, $database,);


if (!$con) {
    die("Someting went wrong !". mysqli_connect_error());
}

?>