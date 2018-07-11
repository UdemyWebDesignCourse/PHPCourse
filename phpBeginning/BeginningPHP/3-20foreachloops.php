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
        // Foreach loops only work with arrays
        $listnum = 0;
        $numbers = array(3,663,34,12,345,3,453,7,4,4,474,45,47,);
        foreach($numbers as $num){
            $listnum++;
            echo '<b>'.$listnum.'.</b> '.$num . '<br>';
        }
    
    ?>
</body>
</html>