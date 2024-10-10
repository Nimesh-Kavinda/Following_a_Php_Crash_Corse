<?php

// echo - Output Strings, numbers , html etc ..
    // echo 123, 'Hello', 10.54;       (mostly used)

// print - Works like echo, but can only take in a singel argument
//    print 123;

// print_r() - Print singel values and arrays

    // print_r([1,2,3,4,5]);

// var_dump() - Return more infoi like datatype and lenght

  // var_dump('Hellow Nimesh');

// var_export() - Simlilar to var_dump(), Outputs a String representation of a varibel

    // var_export('Heloow Nimesh');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Nimesh'; ?></h1>  
    <!-- A way of repernsting ehco -->
    <h2> <?= 'Kavinda'?> </h2>    
</body>
</html>