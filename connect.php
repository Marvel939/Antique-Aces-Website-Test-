<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "antiquedb";

$con = mysqli_connect($server, $username, $password, $dbname);
//$con = mysqli_connect("localhost", "root", "", "antiquedb");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo "Access granted";
}
?>