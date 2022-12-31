<?php
  $error = '';

  if (isset($_GET['state'])) {
    $error = 'Failure operation.';
  }
?>
<?php
include('layout/header1.php');
include "db_connection.php";

// $id = $_GET["id"];

$sql = "select * from administrator";

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    #we add the table inside the if not in loop
    echo "<div class='slider movie-items'>
        <div class='container mt-80'>
            <p class='page-title'>Employee List</p>
            <div><p style='color: red'>".$error."</p></div>
            <table class='cinema-table'>
            <tr>
                <th> Employee ID</th>
                <th> Employee Name</th>
                <th> Employee Email </th>
                <th> Update Employee </th>
                <th> Delete Employee </th>
            </tr>";

    while ($value = mysqli_fetch_array($result)) {

        echo "<tr>
        <td> " . $value["employee_id"] . " </td>
        <td> " . $value["employee_name"] . " </td>
        <td> " . $value["employee_email"] . " </td>
        <td> <a href=delete_employee.php?id=" . $value["employee_id"] . "> Delete </a> </td>
        <td> <a href=update_employee_form.php?id=" . $value["employee_id"] . "> Update </a> </td>
        </tr>";
    }
    echo "</table>";
} else 
  {
      echo "<tr><td colspan='5' style='text-align: center;'>No Data</td></tr>";
  }
  echo "</table></div></div>";

  include "layout/footer.php";
?>