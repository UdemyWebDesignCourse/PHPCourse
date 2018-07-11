<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head> 
<?php 
   $var = 18;
   // The breaks make it to where the program flow will exit once one of the case are true
   // If there are no breaks; placed then it will continue to execute all cases that are true until it meets a break or it leaves the switch statement
   
   switch($var){
       case 7:
       echo '<h1>It is 7</h1>';
       break;
       case 8:
       echo 'It is 8';
       break;
       case 9: 
       echo 'It is 9';
       break;
       case 18:
       echo 'It is 18 gene stein';
       break;
       case 15 < $var:
       echo 'Yes you cand o that 15 > Var';
       break;
       
       default:
       echo '<h1>Error: None of the numbers</h1>';
       break;

   }
?>
<body>

</body>

</html>