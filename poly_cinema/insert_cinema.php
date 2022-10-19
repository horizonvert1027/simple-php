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
        <p class="page-title">Add Cinema</p>
        <div><p style="color: red;"><?php echo $error;?></p></div>

        <form action = "create_cinema.php" method = "POST">

            <label> Cinema Location</label>
            <input type="text" name="cinema_location" >

            <label> Screen Number</label>
            <input type="text" name="screen_number" >

            <label> cinema_type</label>
            <br>
            <label> Theater</label>

            <input type="radio" name="cinema_type" id="Theater" value="Theater" checked >

            <label> Standard</label>

            <input type="radio" name="cinema_type" id="standard" value="standard">

            <input type="submit" name="submit" value = "submit" >
       </form>
    </div>
</div>

<?php
    include('layout/footer.php');
?>