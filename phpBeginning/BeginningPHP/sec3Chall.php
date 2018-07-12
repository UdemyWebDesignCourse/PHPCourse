<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    if (5 <2){
        echo 'I hate php <br>';
    } else if(2<1){
        echo 'I like php<br>';
    } else {
        echo 'I love php<br>';
    }
    for($int=0;$int<5;$int++){
        echo 'number from forloop '.$int.'<br>';
    }
    $var =  9;
    switch($var){
        case 1:
        echo 'var is 4<br>';
        break;
        case 5:
        echo 'var is 5<br>';
        break;
        case 6:
        echo 'var is 6<br>';
        break;
        case 7:
        echo 'var is 7<br>';
        break;
        case 19:
        echo 'var is 8<br>';
        break;
        default:
        echo 'var is none of the cases<br>';
        break;
    }
?>
    
</body>
</html>