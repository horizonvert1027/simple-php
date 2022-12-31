<?php
  $error = '';

  if (isset($_GET['state'])) {
    $error = 'Failure operation.';
  }
?>
<?php
  include('layout/header1.php');
  include "db_connection.php"; #we conncet the database php document

  // $id = $_GET["id"];

  $sql = "select * from shows, movies where shows.movie_id = movies.movie_id";


  $result = mysqli_query($conn, $sql);


  if($result->num_rows > 0)
  {
      #we add the table inside the if not in loop
      echo "<div class='slider movie-items'>
        <div class='container mt-80'>
          <p class='page-title'>Shows List</p>
          <div><p style='color: red'>".$error."</p></div>
          <table class='cinema-table'>
            <tr>
              <th> Show id </th>
              <th> Show time </th>
              <th> Show date </th>
              <th> Movie name </th>
              <th> Delete </th>
              <th> Update </th>
            </tr>";

      while($value = mysqli_fetch_array($result) )
      {

          echo "<tr>
            <td> ".$value["show_id"]." </td>
            <td> ".$value["show_time"]." </td>
            <td> ".$value["show_date"]." </td>
            <td> ".$value["movie_name"]." </td>
            <td> <a href=delete_shows.php?id=".$value["show_id"]."> Delete </a> </td>
            <td> <a href=update_show_form.php?id=".$value["show_id"]."> Update </a> </td>
          </tr>";
      }
  }
  else
  {
      echo "<tr><td colspan='7' style='text-align: center;'>No Data</td></tr>";
  }
  echo "</table></div></div>";

  include "layout/footer.php";
?>
              <!-- <th> View </th> -->
            <!-- <td> <a href=view_show.php?id=".$value["show_id"]."> View </a> </td> -->