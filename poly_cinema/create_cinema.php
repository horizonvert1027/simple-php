<?php 

include "db_connection.php";
$cinema_location = $_POST['cinema_location'];
$screen_number = $_POST['screen_number'];
$cinema_type = $_POST['cinema_type'];
$movie_id = $_POST['movie_id'];



$sql = "insert into cinemas (cinema_location, screen_number, cinema_type, movie_id) 
values ('$cinema_location' , '$screen_number ', '$cinema_type', '$movie_id')";
echo $sql;

$result = mysqli_query($conn, $sql);

if($result == TRUE)
{
    echo "successful";
}
else 
{
    echo "error";
}

mysqli_close($conn);
