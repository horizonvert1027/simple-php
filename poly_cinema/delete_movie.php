<?php

include "db_connection.php";
$id= $_GET["movie_id"];



 $sql = "delete from movies WHERE movie_id = $id" ;
 echo $sql;

 $result = mysqli_query($conn, $sql);

 if($result == true)
 {
    echo"working";
 }
 else
 {
    echo"fail";
 }