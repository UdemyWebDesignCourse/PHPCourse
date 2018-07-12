<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php // returns absolute value
        echo abs(-4.34);
    // return string without html tags
    $strHtml  = '<p>fuck wads here it is <b>Bitch head</b></p>';
    echo $strHtml;
    echo strip_tags($strHtml);
    // array_unique gets rid of duplicates
    $arr  = array(32,236,46,33,33,24,55,32,75,23,2533,2533,236,75,38);
    echo 'before <br>';
    print_r($arr);
    echo '<br>';
    echo 'after<br>';
    $arr = array_unique($arr);
    print_r($arr);
    echo '<br>';
    $a = array('3','2','12','12','2','64','543','2','54','25','235','23');
    echo 'before<br>';
    print_r($a);
    echo '<br>';
    $a= array_unique($a,SORT_STRING  );
    echo 'after <br>';
    print_r($a);
    echo '<br>';
    ?>
</body>
</html>