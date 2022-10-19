<?php


include "db_connection.php";

$show_time = $_POST["show_time"];
$show_date = $_POST["show_date"];
$movie_id = $_POST['movie_id'];



$sql="insert into shows (show_time,show_date,movie_id )
values ('$show_time','$show_date','$movie_id')";

echo $sql;

$result = mysqli_query($conn, $sql);

if($result == true)
{
    header("location:view_shows.php");
}
else{
    header("location:insert_show.php?state=false");
}
mysqli_close($conn);