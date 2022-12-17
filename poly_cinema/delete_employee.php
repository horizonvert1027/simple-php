<?php

include "db_connection.php";
$id= $_GET["id"];



 $sql = "delete from administrator where employee_id = $id";


 $result = mysqli_query($conn, $sql);

 if($result == true)
 {
    echo"working";
 }
 else
 {
    echo"fail";
 }