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

session_start();
include "db_connection.php"; #we conncet the database php document




$sql = "select * from movies, cinemas where movies.cinema_id = cinemas.cinema_id ";



$resulte = mysqli_query($conn, $sql);



if($resulte->num_rows > 0)
{
    #we add the table inside the if not in loop
    echo "<table>
    <tr>
    <th> movie id </th>
    <th> movie image </th>
    <th> movie name </th>
    <th> director </th>
    <th> cast </th>
    <th> description </th>
    <th> duration </th>
    <th> classification age </th>
    <th> movie langauge </th>
    <th> genre </th>
    <th> rate </th>
    <th> cinema location </th>
    <th> cinema screen number </th>
    <th> view movie </th>
    <th> update movie </th>
    <th> delete movie </th>
    <tr>";

    while($value = mysqli_fetch_array($resulte))
      {

        echo "<tr>
        <td> ".$value["movie_id"]." </td>
        <td> <img src= '".$value["std_image"]."' height='100px' width='100px' > </td>
        <td> ".$value["movie_name"]." </td>
        <td> ".$value["director_name"]." </td>
        <td> ".$value["cast"]." </td>
        <td> ".$value["discription"]." </td>
        <td> ".$value["duration"]." </td>
        <td> ".$value["classification_age"]." </td>
        <td> ".$value["movie_language"]." </td>
        <td> ".$value["genre"]." </td>
        <td> ".$value["rate"]." </td>
        <td> ".$value["cinema_location"]." </td>
        <td> ".$value["screen_number"]." </td>
        <td> <a href=view_movie.php?id=".$value["movie_id"]."> View </a> </td>
        <td> <a href=delete_movie.php?id=".$value["movie_id"]."> Delete </a> </td>
        <td> <a href=update_movie.php?id=".$value["movie_id"]."> Update </a> </td>


        </tr>";
        
    }

    echo "</table>";
}
else
{
    echo "something is wrong";
}