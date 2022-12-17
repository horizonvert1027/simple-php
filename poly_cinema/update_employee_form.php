<html>











<?php 

include "db_connection.php";
$id = $_GET["id"];
$sql = "SELECT * from administrator where employee_id = $id";

$resulte = mysqli_query($conn, $sql);

while($value = mysqli_fetch_assoc($resulte))
{
  
$employee_id = $value["employee_id"];
$emplyee_name  = $value["emplyee_name"];
$employee_email = $value["employee_email"];
$employee_password  = $value["employee_password"];

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

<form action="update_employee.php" method="POST">
    employee name<input type="text" name="emplyee_name" value = "<?php print $emplyee_name ?>">
    employee email<input type="text" name="employee_email" value = "<?php print $employee_email ?>" >
    password<input type="text" name="employee_password" value = "<?php print $employee_password ?>">
   <input type="hidden" id="id"  name="employee_id" value = "<?php print $employee_id ?>">

      
    
   
    <input type="submit" name="submit">

    

    
</form>

</body>


</html>
