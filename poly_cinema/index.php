<?php
include "db_connection.php";
// session_start();
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form

  $username = $_POST['username'];
  $password = $_POST['user_password'];

  $sql = "SELECT * FROM administrator WHERE employee_email = '$username' and employee_password = '$password'";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_array($result);

  $count = mysqli_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row
  if ($count == 1) {
    echo $row;
    $_SESSION['login_user'] = $username;
    $_SESSION['user_id'] = $row["user_id"];
    header("location: view_cinemas.php");
  } else {
    $error = "Your Login Name or Password is invalid";
  }
}
?>
<?php
  include 'layout/header1.php';
?>
<div class="slider movie-items">

    <div class="container mt-80">
      <p class="page-title">Login Page</p>
      <div><p style="color: red"><?php echo $error;?></p></div>
      <form action="login.php" method="POST">
        <label> Username</label>

        <input type="text" name="username" />

        <label> User Password</label>

        <input type="password" name="user_password" />

        <input type="submit" name="submit" value="submit" />
      </form>
    </div>
</div>
<?php
  include 'layout/footer.php';
?>