<html>











<?php 

include "db_connection.php";
$id = $_GET["id"];
$sql = "SELECT * from cinemas where cinema_id = $id";

$resulte = mysqli_query($conn, $sql);

while($value = mysqli_fetch_assoc($resulte))
{
  
$cinema_id = $value["cinema_id"];
$cinema_location  = $value["cinema_location"];
$screen_number = $value["screen_number"];
$cinema_type  = $value["cinema_type"];

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

<form action="update_cinema1.php" method="POST">
    cinema location<input type="text" name="cinema_location" value = "<?php print $cinema_location ?>">
    screen_number<input type="text" name="screen_number" value = "<?php print $screen_number ?>" >
    cinema_type<input type="text" name="cinema_type" value = "<?php print $cinema_type ?>">
   <input type="hidden" id="id"  name="cinema_id" value = "<?php print $cinema_id ?>">

      
    
   
    <input type="submit" name="submit">

    

    
</form>

</body>


</html>

