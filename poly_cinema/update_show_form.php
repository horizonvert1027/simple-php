<?php 
  include "db_connection.php";
  $id = $_GET["id"];
  $sql = "SELECT * from shows where show_id = $id";

  $resulte = mysqli_query($conn, $sql);

  while($value = mysqli_fetch_assoc($resulte))
  {
    
  $show_id = $value["show_id"];
  $show_time  = $value["show_time"];
  $show_date = $value["show_date"];
  $movie_id  = $value["movie_id"];

  }
?>
<?php
    include('layout/header1.php');
?>
<div class="slider movie-items">
  <div class="container mt-80">
    <form action="update_show.php" method="POST">
        show time<input type="time" name="show_time" value = "<?php print $show_time ?>">
        show date<input type="date" name="show_date" value = "<?php print $show_date ?>" >

        <select name="movie_id">
        <?php 

        $sql = "select * from movies";
        $result = mysqli_query($conn, $sql);

        while($value = mysqli_fetch_array($result)) {
          $mov_name = $value["movie_name"];
          $mov_id = $value["movie_id"];
          if($movie_id ==   $mov_id) {
        ?>
        <option value="<?php echo $mov_id;?>" selected><?php echo   $mov_name;?> </option>

        <?php } else { ?>
          <option value="<?php echo $mov_id;?>" ><?php echo   $mov_name;?> </option>
        <?php } } ?>
        </select>
        <input type="hidden" id="id"  name="show_id" value = "<?php print $show_id ?>">
        <input type="submit" name="submit">
        
    </form>
  </div>
</div>
<?php
    include('layout/footer.php');
?>