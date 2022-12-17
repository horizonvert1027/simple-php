<?php
   include("db_connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['user_password']; 
      
      $sql = "SELECT * FROM administrator WHERE employee_email = '$username' and employee_password = '$password'";
      $result = mysqli_query($conn,$sql);
   
      $row = mysqli_fetch_array($result);
   
      $count = mysqli_num_rows($result);
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         echo $row;
         $_SESSION['login_user'] = $username;
         $_SESSION['user_id'] = $row["user_id"];
         header("location: view_cinemas.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Implement Sticky Header and Footer with CSS</title>
<style>
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
</head>
<body>
    <div class="fixed-header">
        <div class="container">
       
        </div>
    </div>
    <div class="container">
        <p>Login Page</p>


 <form action = "login.php" method = "POST">
 <label> Username</label>

<input type="text" name="username" >

<label> User Password</label>

<input type="password" name="user_password" >




<input type="submit" name="submit" value = "submit" >

</form>


    </div>    
    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2021 Your Company</div>        
    </div>
</body>
</html>
