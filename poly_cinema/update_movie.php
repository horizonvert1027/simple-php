<?php  

include "db_connection.php";


 //print_r($_FILES["uploadfile"]["name"]);
 $filename = $_FILES["uploadfile"]["name"];
 $tempname = $_FILES["uploadfile"]["tmp_name"];
 $folder = "images/".$filename;
 //echo $folder;
 move_uploaded_file($tempname, $folder);

$movie_id = $_POST["movie_id"];
$movie_name  = $_POST["movie_name"];
$director_name = $_POST["director_name"];
$cast  = $_POST["cast"];
$discription  = $_POST["discription"];
$duration  = $_POST["duration"];
$classification_age	  = $_POST["classification_age"];
$movie_language	  = $_POST["movie_language"];
$genre = $_POST["genre"];
$rate = $_POST["rate"];
$cinema_id = $_POST["cinema_id"];

$sql = "update movies set std_image = '$folder', movie_name = '$movie_name', director_name = '$director_name', cast = '$cast' , discription = '$discription' , duration = '$duration' , classification_age = '$classification_age' , movie_language = '$movie_language' , genre = '$genre' , rate = '$rate' , cinema_id = '$cinema_id' 
where movie_id = '$movie_id'"; // saving sql code in a varible 

echo $sql;


$resulte = mysqli_query($conn, $sql); // checking if the sql code have no errors 

if($result == true)
{
    header("location:view_movies.php");
}
else{
    header("location:view_movies.php?state=false");
}