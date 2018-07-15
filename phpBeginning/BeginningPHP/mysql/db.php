<?php
global $connection;
// Server, phpmyadmin username, phpmyadmin password, & database name
$connection = mysqli_connect('localhost','root','','loginapp');
if(!$connection){
    die('Connection refused'.mysqli_error());
}
?>