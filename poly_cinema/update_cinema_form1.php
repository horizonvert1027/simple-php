
<?php 

  include "db_connection.php";
  $id = $_GET["id"];
  $sql = "SELECT * from cinemas where cinema_id = $id";

  $resulte = mysqli_query($conn, $sql);

  while($value = mysqli_fetch_assoc($resulte))
  {
    
  $cinema_id = $value["cinema_id"];
  $cinema_location  = $value["cinema_location"];
  $screen_number = $value["screen_number"];
  $cinema_type  = $value["cinema_type"];

  }
  include('layout/header1.php')
?>
<div class="slider movie-items">
    <div class="container mt-80">
      <p class="page-title">Cinema Update</p>
      <form action="update_cinema1.php" method="POST">
          cinema location<input type="text" name="cinema_location" value = "<?php print $cinema_location ?>">
          screen_number<input type="text" name="screen_number" value = "<?php print $screen_number ?>" >
          cinema_type<input type="text" name="cinema_type" value = "<?php print $cinema_type ?>">
         <input type="hidden" id="id"  name="cinema_id" value = "<?php print $cinema_id ?>">
          <input type="submit" name="submit">
      </form>
    </div>
  </div>

  
<?php
    include('layout/footer.php');
?>