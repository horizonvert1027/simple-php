<?php
include "db_connection.php";



$cinema_id= $_GET["cinema_id"];


$sql = "SELECT * FROM cinemas WHERE cinema_id = '$cinema_id'";

$result= mysqli_query($conn, $sql);

while($value = mysqli_fetch_assoc($result))
{
$cinema_location = $value["cinema_location"];
$screen_number = $value["screen_number"];
$cinema_type = $value["cinema_type"];
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

<html>
<head>


</head>
<body>
<form action="update_cinema.php" method="POST">
  <input type="hidden" value=" <?php echo $cinema_id; ?>">

<lable> cinema location</lable>
<input type="text" name="cinema_location" value="<?php echo $cinema_location ?>">

<lable> screen_number </lable>
<input type="text" name="screen_number" value="<?php echo $screen_number ?>">


<lable> cinema type</lable>
<input type="radio" name="cinema_type" value="<?php echo $cinema_type ?>" id="Standard"> Standard
<input type="radio" name="cinema_type" value="<?php echo $cinema_type ?>" id="Theatre"> Theatre

<input type="hidden" name="cinema_id" value="<?php echo $cinema_id ?>">
<input type="submit" name="submit"> </input>


</form>

</body>

</html>