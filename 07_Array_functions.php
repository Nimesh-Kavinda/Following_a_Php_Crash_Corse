<?php

$fruits = ['apple', 'ornage', 'pear'];

// Get a lenght of a Array


// echo count($fruits);




// Search Array

// var_dump(in_array('apple', $fruits));




// Add array

// $fruits[] = 'banana';
// array_push($fruits, 'mango');
// array_unshift($fruits, 'grapes'); // add to start of array




// Remove from Array

// array_pop($fruits);  -- Remove From end
// array_shift($fruits);  -- Remove From Strat

// unset($fruits[1]);


// Spit into 2 chunks

// $chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);

// print_r($fruits);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

// Merge Arrays

// $arr3 = array_merge($arr1, $arr2);

//  $arr4 = [...$arr1,...$arr2]; 

// print_r($arr4);



// Combine Arrys

        // when combining index are dispper and give a one arry elemnts as the inde of other


$a = ['green', 'red', 'yellow'];
$b = ['avacdo', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

// $keys = array_keys($c);
// print_r($keys);

// $flipped = array_flip($c);

// print_r($flipped);



// Range 


$numbers = range(1, 20);

// print_r($numbers);

// maping a Array 
$newNumbers = array_map(function($number){
    return "Number ${number}";
},$numbers);

// print_r($newNumbers);


// array filter

$lessThan10 = array_filter($numbers, fn($number) =>
 $number <= 10);

// print_r($lessThan10);


// Reduce 

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);


?>