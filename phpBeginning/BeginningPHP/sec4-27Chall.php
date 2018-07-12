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
        function calculate($var1,$var2){
            return $var1+$var2;
        }
        $result= calculate(5,10);
        echo $result.'<br>';
        $result = calculate($result,9);
        echo $result;
    ?>
</body>
</html>