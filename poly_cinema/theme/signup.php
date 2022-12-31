<?php
    include('layout/header.php');
?>
<div class="slider movie-items">
    <div class="container">
        <p>Signup Page</p>

        <form action = "./manage/create_employee.php" method = "POST">

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