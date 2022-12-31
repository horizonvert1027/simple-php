<?php

$servername = "localhost";
$username = "root"; #it is always root
$password = ""; #mac users must include password
$dbname = "poly_cinema"; #the created database in phpmyadmin
$port = 3306; #mac users must include it

$conn = new mysqli($servername, $username, $password, $dbname, $port);


if($conn->connect_error)
{
    echo $conn->connect_error;
}


?>