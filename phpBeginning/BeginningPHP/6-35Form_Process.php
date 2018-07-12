<?php
$users = array('frank','deadly','killer','extrude','insectkiller','paul','timbanks');
$usersP = array('password','12345','aaaaaaaaa','bbsdadsdd');
// _POST is a superglobal variable containg posted information _Get does this too but is less secure
    if(isset($_POST['submit'])){
        $min = 5;
$max = 18;
        echo 'form submitted!<br>';
        $usersName = $_POST['username'];
        $usersPass = $_POST['password'];
        /// Validate user's name
    if(strlen($usersName   )  < $min ){
        echo '<h1>The user name is too short. It must be 5 or more letters long</h1><br>';
    } elseif(strlen($usersName )> $max){
        echo '<h1>The user name is too large. It must be 18 letters long at most</h1><br>';
    }
    if(strlen($usersPass   ) < $min  ){
        echo '<h1>The password is too short. It must be 5 or more letters long</h1><br>';
    } elseif(strlen($usersPass) > $max){
        echo '<h1>The password is too large. It must be 18 letters long at most</h1><br>';
    }

    if(!in_array($usersName,$users)||!in_array($usersPass,$usersP)){
        echo 'Wrong pass or name. You are not allowed in sir';
    } elseif(in_array($usersName,$users)&&in_array($usersPass,$usersP)){
        echo '<b>Welcome</b>';
    }
        
    }
?>