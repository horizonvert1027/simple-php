<?php


include "db_connection.php";

$emplyee_name = $_POST["emplyee_name"];

$employee_email = $_POST["employee_email"];

$employee_password = $_POST["employee_password"];

$sql="insert into administrator (emplyee_name,employee_email,employee_password)values ('$emplyee_name','$employee_email','$employee_password')";

$result= mysqli_query($conn,$sql);

if($result == true)
{
    echo "working";
}
else{
    echo "fail";
}