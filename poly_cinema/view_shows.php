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

$id = $_GET["id"];

$sql = "select * from shows, movies where shows.movie_id = movies.movie_id";


$result = mysqli_query($conn, $sql);


if($result->num_rows > 0)
{
    #we add the table inside the if not in loop
    echo "<table>
    <tr>
    <th> show id </th>
    <th> movie name </th>
    <th> time </th>
    <th> movie </th>
    <th> Edit show </th>
    
    <tr>";

    while($value = mysqli_fetch_array($result) )
    {

        echo "<tr>
        <td> ".$value["show_id"]." </td>
        <td> ".$value["show_time"]." </td>
        <td> ".$value["show_date"]." </td>
        <td> ".$value["movie_name"]." </td>
        <td> <a href=view_show.php?id=".$value["show_id"]."> View </a> </td>
        <td> <a href=delete_shows.php?id=".$value["show_id"]."> Delete </a> </td>
        <td> <a href=update_show_form.php?id=".$value["show_id"]."> Update </a> </td>


        </tr>";
        
    }

    echo "</table>";
}
else
{
    echo "something is wrong";
}