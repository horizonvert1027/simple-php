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

include "db_connection.php"; #we conncet the database php document

$sql = "select * from cinemas";

$result = mysqli_query($conn, $sql);


if($result->num_rows > 0)
{
    #we add the table inside the if not in loop
    echo "<table>
    <tr>
    <th> cinema id </th>
    <th> cinema location </th>
    <th> cinema screen </th>
    <th> cinema type </th>
    <th> View movie </th>
    <th> Delete movie </th>
    <th> Update movie </th>

    <tr>";

    while($value = mysqli_fetch_array($result) )
    {

        echo "<tr>
        <td> ".$value["cinema_id"]." </td>
        <td> ".$value["cinema_location"]." </td>
        <td> ".$value["screen_number"]." </td>
        <td> ".$value["cinema_type"]." </td>
        <td> <a href=view_movie.php?id=".$value["cinema_id"]."> View </a> </td>
        <td> <a href=delete_cinema.php?id=".$value["cinema_id"]."> Delete </a> </td>
        <td> <a href=update_cinema_form1.php?id=".$value["cinema_id"]."> Update </a> </td>


        </tr>";
        
    }

    echo "</table>";
}
else
{
    echo "something is wrong";
}