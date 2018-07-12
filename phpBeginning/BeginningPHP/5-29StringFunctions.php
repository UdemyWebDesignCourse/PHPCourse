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
// PHP.net is place to go for all builtin functions related to string & other php syntax shipping outof the apache box wit it
    $string = 'Hello class how do you like the class? Is it great or no. Sign up to be a walmart advocate and advocate for walmart today!';
    echo $string;
    echo '<br>';
    // Count the length of the string
    echo strlen($string);
    echo '<br>';
    // Convert to all uppercase
    echo strtoupper($string);
    echo '<br>';
    // Convert to all lowercase
    echo strtolower($string);
    echo '<br>';


?>
</body>
</html>