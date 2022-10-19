<?php
  $error = '';

  if (isset($_GET['state'])) {
    $error = 'Failure operation.';
  }
?>
<?php
  include('layout/header1.php');

  // session_start();
  include "db_connection.php"; #we conncet the database php document

  $sql = "select * from movies, cinemas where movies.cinema_id = cinemas.cinema_id ";
  $resulte = mysqli_query($conn, $sql);

  #we add the table inside the if not in loop
  echo "<div class='slider movie-items'>
    <div class='container mt-80'>
      <p class='page-title'>Movies List</p>
      <div><p style='color: red'>".$error."</p></div>
      <table class='cinema-table'>
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
        <th> update movie </th>
        <th> delete movie </th>
      <tr>";
  if($resulte->num_rows > 0)
  {

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
          <td> <a href=delete_movie.php?id=".$value["movie_id"]."> Delete </a> </td>
          <td> <a href=update_movie_form.php?id=".$value["movie_id"]."> Update </a> </td>


          </tr>";
          
      }

      echo "</table>";
  }
  else
  {
    echo "<tr><td colspan='16' style='text-align: center;'>No Data</td></tr>";
  }
  echo "</table></div></div>";

  include "layout/footer.php";
?>
        <!-- <th> view movie </th> -->
          <!-- <td> <a href=view_movie.php?id=".$value["movie_id"]."> View </a> </td> -->