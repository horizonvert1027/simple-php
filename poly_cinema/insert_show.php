<?php
  $error = '';

  if (isset($_GET['state'])) {
    $error = 'Failure Insert, try again';
  }
?>
<?php
    include('layout/header1.php');
?>
<div class="slider movie-items">
    <div class="container mt-80">
        <p class="page-title">Add Show</p>
        <div><p style="color: red;"><?php echo $error;?></p></div>
        <form action = "create_shows.php" method = "POST">

            <label> show time</label>
            <input type="time" name="show_time" >

            <label> show date</label>
            <input type="date" name="show_date" >

            <select name="movie_id">
            <?php 

            include "db_connection.php";

            $sql = "select * from movies";
            $result = mysqli_query($conn, $sql);

            while($value = mysqli_fetch_array($result))

            {
              $moviename = $value["movie_name"];
              $movieid = $value["movie_id"];
              ?>
            <option value="<?php echo $movieid;?>">
             <?php echo  $moviename;?>
            </option>
            <?php
            }
            ?>

            </select>
            <input type="submit" name="submit" value = "submit" >
        </form>

    </div>
</div>

<?php
    include('layout/footer.php');
?>