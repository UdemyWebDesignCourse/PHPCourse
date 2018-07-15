<?php
include "db.php"; ?>
<?php

function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);
     
    while($row = mysqli_fetch_assoc($result)){
        $idd = $row['ID'];
        echo "<option value='$idd'>$idd</option>";
    }
}

function updateTable(){
    global $connection;
    $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "UPDATE users SET userName = '$username',";
        $query .= "password = '$password'";
        $query .= "WHERE ID = $id";
        $result = mysqli_query($connection,$query);
        if (!$result){
            die('Fuck you and dont work'.mysqli_error($connection));
        }
            echo 'Form updated';    
}

function deleteRow(){
    global $connection;
    $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "DELETE FROM users " ;
        $query .= "WHERE ID = $id";
        $result = mysqli_query($connection,$query);
        if (!$result){
            die('Fuck you and dont work'.mysqli_error($connection));
        }
            echo 'Form updated';    
}


?>