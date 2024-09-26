<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "blog_app";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("Connection Error:". mysqli_connect_error());
}
?>