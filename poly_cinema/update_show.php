<?php  

include "db_connection.php";


$show_id = $_POST["show_id"];
$show_time  = $_POST["show_time"];
$show_date = $_POST["show_date"];
$movie_id  = $_POST["movie_id"];


$sql = "update shows set show_time = '$show_time', show_date = '$show_date', movie_id = '$movie_id' 
where show_id = $show_id"; // saving sql code in a varible 

echo $sql;


$resulte = mysqli_query($conn, $sql); // checking if the sql code have no errors 

if($resulte == true)
{
    print "update show worked";

}
else
{
    print "Error can not update show";
}
