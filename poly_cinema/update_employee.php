<?php  

include "db_connection.php";


$employee_id = $_POST["employee_id"];
$emplyee_name  = $_POST["emplyee_name"];
$employee_email = $_POST["employee_email"];
$employee_password  = $_POST["employee_password"];


$sql = "update administrator set employee_name = '$emplyee_name', employee_email = '$employee_email',  employee_password = '$employee_password' where employee_id = $employee_id"; // saving sql code in a varible 

echo $sql;


$resulte = mysqli_query($conn, $sql); // checking if the sql code have no errors 


if($result == true)
{
    header("location:viewprofile_new.php");
}
else{
    header("location:viewprofile_new.php?state=false");
}
?>