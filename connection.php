<?php

$server="localhost";
$username="root";
$password="";
$dbname="login";
if(!$conn=mysqli_connect($server,$username,$password,$dbname)){
    die("failed to connect");
};

?>