<?php

include "db_connection.php";

$id = $_GET["id"];

$sql = "select * from movies where movie_id = $id";


$result = mysqli_query($conn, $sql);


if($result->num_rows > 0)
{
    while($value = mysqli_fetch_assoc($result))
    {
        echo "Movie Name:";
        echo "<br>";
        echo $value["movie_name"];
        echo "<br>";
        echo $value["direactor"];
        echo "<br>";
        echo $value["cast"];
    }
    
}
else
    {
        echo "error";
    }