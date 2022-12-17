<html>











<?php 

include "db_connection.php";
$id = $_GET["id"];
$sql = "SELECT * from movies where movie_id = $id";

$resulte = mysqli_query($conn, $sql);

while($value = mysqli_fetch_assoc($resulte))
{
  
    $movie_id = $value["movie_id"];
    $movie_name  = $value["movie_name"];
    $director_name = $value["director_name"];
    $cast  = $value["cast"];
    $discription  = $value["discription"];
    $duration  = $value["duration"];
    $classification_age	  = $value["classification_age"];
    $movie_language	  = $value["movie_language"];
    $genre = $value["genre"];
    $rate = $value["rate"];
    $cinema_id = $value["cinema_id"];

}






?>







<style>

form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>





<head>


</head>



<body>

<form action="update_movie.php" method="POST" enctype="multipart/form-data">
<label> Upload Image</label>
<input type="file" name="uploadfile">
  
<label> Movie name</label>
<input type="text" name="movie_name" value = "<?php print $movie_name ?>">

<label> director name</label>
<input type="text" name="director_name" value = "<?php print $director_name ?>">

<label> cast</label>
<input type="text" name="cast" value = "<?php print $cast  ?>">

<label> discription</label>
<input type="text" name="discription"  value = "<?php print $discription  ?>">

<label> duration</label>
<input type="text" name="duration"  value = "<?php print $duration  ?>">

<label> classification_age</label>
<input type="text" name="classification_age"  value = "<?php print $classification_age?>">

<label> movie_language</label>
<input type="text" name="movie_language"  value = "<?php print $movie_language  ?>">

<label> genre</label>
<input type="text" name="genre" value = "<?php print $genre  ?>">

<label> rate</label>
<input type="text" name="rate" value = "<?php print $rate  ?>" >

    <select name="cinema_id">
     <?php 

       $sql = "select * from cinemas";
       $result = mysqli_query($conn, $sql);

       while($value = mysqli_fetch_array($result))

     {
        $cin_location = $value["cinema_location"];
        $cin_id = $value["cinema_id"];
        if($cinema_id ==   $cin_id)
        {
       ?>
<option value="<?php echo $cin_id;?>" selected><?php echo   $cin_location;?> </option>

                <?php
  }
  else { ?>
  <option value="<?php echo $cin_id;?>" ><?php echo   $cin_location;?> </option><?php
  }

}
?>

</select>
   <input type="hidden" id="id"  name="movie_id" value = "<?php print $movie_id ?>">

      
    
   
    <input type="submit" name="submit">

    

    
</form>

</body>


</html>

