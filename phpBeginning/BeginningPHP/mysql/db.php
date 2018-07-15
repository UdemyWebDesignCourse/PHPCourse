<?php

$connection = mysqli_connect('localhost','root','','loginapp');
if(!$connection){
    die('Connection refused'.mysqli_error());
}
?>