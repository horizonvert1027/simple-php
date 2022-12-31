<?php 

include "db_connection.php";
$cinema_location = $_POST['cinema_location'];
$screen_number = $_POST['screen_number'];
$cinema_type = $_POST['cinema_type'];



$sql = "insert into cinemas (cinema_location, screen_number, cinema_type) 
values ('$cinema_location' , '$screen_number ', '$cinema_type')";
echo $sql;

$result = mysqli_query($conn, $sql);


if($result == true)
{
    header("location:view_cinemas.php");
}
else{
    header("location:insert_movie.php?state=false");
}

mysqli_close($conn);
