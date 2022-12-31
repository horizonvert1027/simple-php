<?php

include "db_connection.php";
$id= $_GET["id"];



 $sql = "delete from administrator where employee_id = $id";


 $result = mysqli_query($conn, $sql);


if($result == true)
{
    header("location:viewprofile_new.php");
}
else{
    header("location:viewprofile_new.php?state=false");
}