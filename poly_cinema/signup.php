<?php
    include('layout/header1.php');
?>
<div class="slider movie-items">
    <div class="container mt-80">
        <p class="page-title">Signup Page</p>
        <?php
            if (!$_GET['state']) {
                echo '<div><p style="color: red">Failure the sign up. try again.</p></div>';
               
            }
        ?>

        <form action = "create_employee.php" method = "POST">

            <label> Employee Name</label>
            <input type="text" name="emplyee_name" >

            <label> Employee Email</label>
            <input type="text" name="employee_email" >

            <label> Password</label>
            <input type="password" name="employee_password" >

            <input type="submit" name="submit" value = "submit" >


        </form>
    </div>
</div> 
<?php
    include('layout/footer.php');
?>