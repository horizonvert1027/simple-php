<?php


include "db_connection.php";

$emplyee_name = $_POST["emplyee_name"];

$employee_email = $_POST["employee_email"];

$employee_password = $_POST["employee_password"];

$sql="insert into administrator (employee_name,employee_email,employee_password) values ('$emplyee_name','$employee_email','$employee_password')";

$result= mysqli_query($conn,$sql);
if($result == true)
{
    header("location:login.php");
}
else{
    header("location:singup.php?state=false");
}
mysqli_close($conn);