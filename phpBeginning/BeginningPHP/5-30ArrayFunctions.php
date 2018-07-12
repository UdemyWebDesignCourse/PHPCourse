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
    $list = [233,233,2563,64,347,23,8545,34,5684,566,733,45564,4578,346,34346,4545,34,475,23245,3434];
    // Shows the max number in list
    echo max($list);
    echo '<br>';
    // shows the min number in list
    echo min($list);
    echo '<br>';
    /// Prints all items in array as name value pairs
    print_r($list);
    echo '<br>';
    // Sorts the array orderly 
    sort($list);
    echo '<br>';
    print_r($list);
    echo '<br>';    
    ?>

</body>
</html>