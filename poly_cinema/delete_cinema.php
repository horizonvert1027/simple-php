<?php

include "db_connection.php";
$id= $_GET["id"];



 $sql = "delete from cinemas where cinema_id = $id";

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