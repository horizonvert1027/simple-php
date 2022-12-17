<?php


include "db_connection.php";

  //print_r($_FILES["uploadfile"]["name"]);
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "images/".$filename;
  //echo $folder;
  move_uploaded_file($tempname, $folder);

$std_image = $_POST["std_image"];
$movie_name = $_POST["movie_name"];
$director_name = $_POST["director_name"];
$cast = $_POST["cast"];
$discription = $_POST["discription"];
$duration = $_POST["duration"];
$classification_age = $_POST ["classification_age"];
$movie_language = $_POST["movie_language"];
$genre = $_POST ["genre"];
$rate = $_POST["rate"];
$cinema_id = $_POST["cinema_id"];



$sql="insert into movies (std_image, movie_name, director_name,cast,discription,duration,classification_age, movie_language ,genre,rate,cinema_id ) 
values ('$folder', '$movie_name','$director_name','$cast','$discription','$duration','$classification_age','$movie_language','$genre','$rate','$cinema_id')";
echo $sql;
$result= mysqli_query($conn,$sql);

if($result == true)
{
    echo "working";
}
else{
    echo "fail";
}