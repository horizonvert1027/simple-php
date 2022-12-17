<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>

<?php

include "db_connection.php";

$id = $_GET["id"];

$sql = "select * from administrator where employee_id = $id";


$result = mysqli_query($conn, $sql);


if($result->num_rows > 0)
{
    #we add the table inside the if not in loop
    echo "<table>
    <tr>
    <th> Employee ID</th>
    <th> Employee Name</th>
    <th> Employee Email </th>
    <th> Update Employee </th>
    <th> Delete Employee </th>
    <tr>";

    while($value = mysqli_fetch_array($result) )
    {

        echo "<tr>
        <td> ".$value["employee_id"]." </td>
        <td> ".$value["emplyee_name"]." </td>
        <td> ".$value["employee_email"]." </td>
        <td> <a href=delete_employee.php?id=".$value["employee_id"]."> Delete </a> </td>
        <td> <a href=update_employee_form.php?id=".$value["employee_id"]."> Update </a> </td>


        </tr>";
        
    }

    echo "</table>";
    
}
else
    {
        echo "error";
    }