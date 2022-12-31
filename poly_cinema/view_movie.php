<?php
    include('layout/header1.php');
?>
<div class="slider movie-items">
    <div class="container mt-80">
<?php

    include "db_connection.php";

    $id = $_GET["id"];

    $sql = "select * from movies where movie_id = $id";


    $result = mysqli_query($conn, $sql);


    if($result->num_rows > 0)
    {
        while($value = mysqli_fetch_assoc($result))
        {
            echo "Movie Name:";
            echo "<br>";
            echo $value["movie_name"];
            echo "<br>";
            echo "Director Name:";
            echo "<br>";
            echo $value["director_name"];
            echo "<br>";
            echo "Cast:";
            echo "<br>";
            echo $value["cast"];
        }
    } else {
        echo "error";
    }
  echo "</div></div>";

  include "layout/footer.php"
?>