<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "mydb";

$con = mysqli_connect($hostname, $username, $password, $databasename);

if(!$con){
    die("Unable to connect database:".mysqli_connect_errno());
}
?>