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
        <p class="page-title">Insert Movie</p>
        <div><p style="color: red;"><?php echo $error;?></p></div>

        <form action = "create_movie.php" method = "POST" enctype="multipart/form-data">
            <label> Upload Image</label>
            <input type="file" name="uploadfile">


            <label> Movie name</label>
            <input type="text" name="movie_name" >

            <label> director name</label>
            <input type="text" name="director_name" >

            <label> cast</label>
            <input type="text" name="cast" >

            <label> discription</label>
            <input type="text" name="discription" >

            <label> duration</label>
            <input type="text" name="duration" >

            <label> classification_age</label>
            <input type="text" name="classification_age" >

            <label> movie_language</label>
            <input type="text" name="movie_language" >

            <label> genre</label>
            <input type="text" name="genre" >

            <label> rate</label>
            <input type="text" name="rate" >

            <select name="cinema_id">
            <?php 

            include "db_connection.php";

            $sql = "select * from cinemas";
            $result = mysqli_query($conn, $sql);

            while($value = mysqli_fetch_array($result))

            {

              $cinema_location = $value["cinema_id"];
              $cinema_id = $value["cinema_location"];
              ?>
            <option value="<?php echo $cinema_location;?>">
                          <?php echo   $cinema_id;?>
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