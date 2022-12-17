<?php

include "db_connection.php";

$id = $_GET["id"];

$sql = "select * from cinemas where cinema_id = $id";


$result = mysqli_query($conn, $sql);


if($result->num_rows > 0)
{

    while($value = mysqli_fetch_array($result))
    {
        echo $value["cinema_id"];
        echo "<br>";
        echo $value["cinema_location"];
        echo "<br>";
        echo $value["screen_number"];
    }
    
}
else
    {
        echo "error";
    }