<?php

 /* ---------- PHP Data Types ------------ */ 

 /*
- String         Series of characters surrounded by quotes
- Integer        Whole numbers
- Float          Decimal Numbers
- Boolean        True or Flase
- Array          Special variabel,  which can hold more than One value
- Object         A class
- Null           Empty Variable
- Resourece      Special Variable the hold a resource
*/ 

/* --------- Variabel rules ---------- */

/*
- Variables must be prefixed with $.
- Variable must be start with a letter or underscore (_)
  character
- Variables can't start with a number
- Varibles can only contain alpha-numeric characters and underscores (A-z, 0-9, _)
- Variabels are case-sensitive ($name and $NAME are tow different Varibels)

*/

$name = 'Nimesh'; //  String
$age = 23;
$has_kids = false;
$cash = 167.54;

// var_dump($cash);

// echo $name.  ' is ' .$age.  ' Years old ';   // Concatnation of a Varibel and String

// echo "$name is $age years old.";   // Using "" aware you from concntnation

// echo "${name} is ${age} yeasrs old";  // recomend to use like this

// echo '5' + '5' ; 
  // In php iterngers are not going to concatnation even you use them as strings

//  $x = '10' + '12';
//  var_dump($x);

//  echo 10 * 3;
//  echo 30 / 5;


// constrsct

define('HOST', 'localhost');
define('DB_Name', 'dev_db');

echo HOST;

?>