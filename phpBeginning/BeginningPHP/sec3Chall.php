<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    if (5 > 2){
        echo 'I hate php';
    } else if(2<1){
        echo 'I like php';
    } else {
        echo 'I love php';
    }
    for($int=0;$int<5;$int++){
        echo 'number from forloop '.$int;
    }
    $var =  9;
    switch($var){
        case 4:
        echo 'var is 4';
        break;
        case 5:
        echo 'var is 5';
        break;
        case 6:
        echo 'var is 6';
        break;
        case 7:
        echo 'var is 7';
        break;
        case 8:
        echo 'var is 8';
        break;
        default:
        echo 'var is none of the cases';
        break;
    }
?>
    
</body>
</html>