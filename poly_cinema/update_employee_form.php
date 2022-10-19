<?php 

  include "db_connection.php";
  $id = $_GET["id"];
  $sql = "SELECT * from administrator where employee_id = $id";

  $resulte = mysqli_query($conn, $sql);

  while($value = mysqli_fetch_assoc($resulte)) {
    $employee_id = $value["employee_id"];
    $emplyee_name  = $value["employee_name"];
    $employee_email = $value["employee_email"];
    $employee_password  = $value["employee_password"];
  }

?>

<?php
    include('layout/header1.php');
?>
<div class="slider movie-items">
  <div class="container mt-80">
    <p class="page-title">Update Employee</p>
    <form action="update_employee.php" method="POST">
        employee name<input type="text" name="emplyee_name" value = "<?php print $emplyee_name ?>">
        employee email<input type="text" name="employee_email" value = "<?php print $employee_email ?>" >
        password<input type="text" name="employee_password" value = "<?php print $employee_password ?>">
      <input type="hidden" id="id"  name="employee_id" value = "<?php print $employee_id ?>">
      <input type="submit" name="submit">
    </form>
  </div>
</div>
<?php
    include('layout/footer.php');
?>