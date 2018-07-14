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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
    </div>
    
</body>
</html>