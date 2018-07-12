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
    // Global variables are accessable inside & outisde the scope with global keyword
    // Anytime we want to access a variable ou
    $var = 32;
    global $var3;
    $var3 = 'outside it var3<br>';
    function globalChange($changeIt) {
        global $var ;
        $var = $changeIt;
        echo $var.'were inside globalchange function <br>';
        // The thing says Not recommended but we find that it is possible 
        // to make a global variable inside a function if needed
        global $var2;
        $var2 = 'screwing around<br>';
        global $var3;
        // Only can seem to change a global variable's value if its declared global inside function
        $var3 = 'declared inside comming from outside<br>';
    }
    echo $var.'just outside after globalchange fucntion is initilized<br>';
    globalChange(19);
    echo $var.'just after globalchange fucntion is executed<br>';
    echo $var2.'while outside now<br>';
    echo $var3;
    // Constants can never be changed. Once they have a value that value is always known
    // Costumary to use all uppercases or all uppercases and start with _ underscore
    define("_CONSTANT_NAME",5233);
    echo _CONSTANT_NAME;
  ?>
</body>
</html>