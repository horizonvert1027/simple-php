<?php
  $error = '';

  if (isset($_GET['state'])) {
    $error = 'Failure operation.';
  }
?>
<?php
  include('layout/header1.php');

  include "db_connection.php"; #we conncet the database php document

  $sql = "select * from cinemas";

  $result = $conn->query($sql);

  echo '<div class="slider movie-items">
          <div class="container mt-80">
            <p class="page-title">Cinema List</p>
            <div><p style="color: red">'.$error.'</p></div>
            <table class="cinema-table">
              <tr>
              <th> cinema id </th>
              <th> cinema location </th>
              <th> cinema number </th>
              <th> cinema type </th>
              <th> Delete cinema </th>
              <th> Update cinema </th>

              <tr>';
  if ($result->num_rows > 0) {
    #we add the table inside the if not in loop

    while ($value = mysqli_fetch_array($result)) {

      echo "<tr>
          <td> " . $value["cinema_id"] . " </td>
          <td> " . $value["cinema_location"] . " </td>
          <td> " . $value["screen_number"] . " </td>
          <td> " . $value["cinema_type"] . " </td>
          <td> <a href=delete_cinema.php?id=" . $value["cinema_id"] . "> Delete </a> </td>
          <td> <a href=update_cinema_form1.php?id=" . $value["cinema_id"] . "> Update </a> </td>
          </tr>";
    }

  } else {
    echo "<tr><td colspan='7' style='text-align: center;'>No Data</td></tr>";
  }
  echo "</table></div></div>";

  include "layout/footer.php"
?>
              <!-- <th> View cinema </th> -->
          <!-- <td> <a href=view_cinema.php?id=" . $value["cinema_id"] . "> View </a> </td> -->