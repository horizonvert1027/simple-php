<?php

include "db_connection.php";
$id= $_GET["id"];



 $sql = "delete from movies WHERE movie_id = $id" ;
 echo $sql;

 $result = mysqli_query($conn, $sql);

if($result == true)
{
    header("location:view_movies.php");
}
else{
    header("location:view_movies.php?state=false");
}