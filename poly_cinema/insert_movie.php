<style>

form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Implement Sticky Header and Footer with CSS</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=TpS6LT6c32UEqX6tyYKgKep9-eq3-WrVpe0mVIQYxC2VJKDCkmjUKohcJ5xI-TbCOgI9jNn8f6zx0pzcu0llglhdk7YCiJVjxJGxwLBDX86ZO2ZqZMTyIQXeEtbTOYtlXXRa_ehRmh3O1AZIBlAeQ0bvEjcFmbwdih5VcFJYo5elsMSXEKoP8bPQE0yYGVCo" charset="UTF-8"></script><style>
    /* Add some padding on document's body to prevent the content
    to go underneath the header and footer */
    body{        
        padding-top: 60px;
        padding-bottom: 40px;
    }
    .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
        background: #333;
        padding: 10px 0;
        color: #fff;
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 2px solid #f2f2f2;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

    <div class="container">
        <p>Insert Movie</p>

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
    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2021 Your Company</div>        
    </div>
</body>
</html>