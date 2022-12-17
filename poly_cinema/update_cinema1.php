<?php  

include "db_connection.php";


$cinema_id = $_POST["cinema_id"];
$cinema_location  = $_POST["cinema_location"];
$screen_number = $_POST["screen_number"];
$cinema_type  = $_POST["cinema_type"];


$sql = "update cinemas set cinema_location = '$cinema_location', screen_number = '$screen_number', cinema_type = '$cinema_type' 
where cinema_id = $cinema_id"; // saving sql code in a varible 


$resulte = mysqli_query($conn, $sql); // checking if the sql code have no errors 

if($resulte == true)
{
    print "update cinema worked";

}
else
{
    print "Error can not update cinema";
}











?>