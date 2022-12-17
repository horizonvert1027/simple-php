<html>











<?php 

include "db_connection.php";
$id = $_GET["id"];
$sql = "SELECT * from shows where show_id = $id";

$resulte = mysqli_query($conn, $sql);

while($value = mysqli_fetch_assoc($resulte))
{
  
$show_id = $value["show_id"];
$show_time  = $value["show_time"];
$show_date = $value["show_date"];
$movie_id  = $value["movie_id"];

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

<form action="update_show.php" method="POST">
    show time<input type="time" name="show_time" value = "<?php print $show_time ?>">
    show date<input type="date" name="show_date" value = "<?php print $show_date ?>" >

    <select name="movie_id">
<?php 

$sql = "select * from movies";
$result = mysqli_query($conn, $sql);

while($value = mysqli_fetch_array($result))

{
  $mov_name = $value["movie_name"];
  $mov_id = $value["movie_id"];
  if($movie_id ==   $mov_id)
  {
  ?>
<option value="<?php echo $mov_id;?>" selected><?php echo   $mov_name;?> </option>

                <?php
  }
  else { ?>
  <option value="<?php echo $mov_id;?>" ><?php echo   $mov_name;?> </option><?php
  }

}
?>

</select>

   <input type="hidden" id="id"  name="show_id" value = "<?php print $show_id ?>">

      
    
   
    <input type="submit" name="submit">

    

    
</form>

</body>


</html>

