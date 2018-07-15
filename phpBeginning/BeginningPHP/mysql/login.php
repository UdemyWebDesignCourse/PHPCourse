<?php include "includes/header.php"; ?>
<?php include "includes/footer.php"; ?>
<?php
    if(isset($_POST['submit'])){
        $uName = $_POST['username'];
        $uPass = $_POST['password'];
             // Server, phpmyadmin username, phpmyadmin password, & database name
        $connection = mysqli_connect('localhost','root','','loginapp');
        if($connection){
            echo 'You are connected!';
        } else{
            die("Database connection refused");
        }
        if($uName && $uPass){
            echo 'Username: '.$uName.'<br>';
        echo 'Users Password: '.$uPass.'<br>';
            // Inserting query into users table for userName & password columns
        $query = "INSERT INTO users(userName, password)";
            // Always use '' quotes for values
        $query .= "VALUES ('$uName','$uPass')";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die('Did not work out '.mysqli_error());
        }
        }else{
            echo 'This form cannot be blank<br>';
        }

    }
?>


    <div class="container">
    <div class="col-xs-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password"class="form-control">
            </div>
            <div class="form-group">
            <input class="btn btn-primary" type="submit" name='submit' class="form-control" value="Submit It">
            </div>
        </form>
    </div>
     