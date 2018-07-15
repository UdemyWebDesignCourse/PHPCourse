<?php
include "db.php"; ?>
<?php
 

function readAll(){
     
    global $connection;
       
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Did not work out '.mysqli_error());
    }else {
        echo "<div class='text-center'><h1>Welcome!</h1></div> ";
    }
    // mysqli_fetch_row returns a regular array with name value pairs 
            // mysqli_fetch_assoc returns a associative array which looks better  
            // We can also end php to place html tags inside a php loop then bring php back and end it again and place the html tags to create stuff thats good now days
            while($row = mysqli_fetch_assoc($result)){
              
                print_r($row);
               
            }
}

function createRow(){
    if(isset($_POST['submit'])){
        global $connection;
        $uName = $_POST['username'];
        $uPass = $_POST['password'];
             // Server, phpmyadmin username, phpmyadmin password, & database name
       
        if($uName && $uPass){
            echo 'Username: '.$uName.'<br>';
        echo 'Users Password: '.$uPass.'<br>';
            // Inserting query into users table for userName & password columns
        $query = "INSERT INTO users(userName, password)";
            // Always use '' quotes for values
        $query .= "VALUES ('$uName','$uPass')";
        $result = mysqli_query($connection,$query);
    }
    
    if(!$result){
        die('Did not work out '.mysqli_error());
        
    } else{
        echo 'User created';
    }
}   
}

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
    
    if (isset($_POST['submit'])){
        global $connection;
    $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "UPDATE users SET userName = '$username',";
        $query .= "password = '$password'";
        $query .= "WHERE ID = $id";
        $result = mysqli_query($connection,$query);
        if (!$result){
            die("Fuck you and dont work".mysqli_error($connection));
        }else{echo "Form updated";}
    }
    
                
}

function deleteRow(){
    if (isset($_POST['submit'])){
        global $connection;
        $id = $_POST['id'];
        $query = "DELETE FROM users " ;
        $query .= "WHERE ID = $id";
        $result = mysqli_query($connection,$query);
        if (!$result){
            die('Fuck you and dont work'.mysqli_error($connection));
        }else{echo 'Record Deleted';    }
            
}
    }
    


?>