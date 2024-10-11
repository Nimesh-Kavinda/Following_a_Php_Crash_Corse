<?php

function registerUser($email){
    echo $email. ' User register';
}

    // registerUser('nimesh@gmail.com');

    function sum($n1, $n2){
        return $n1 + $n2;
    }

    // $number = sum(5, 6);

    // echo $number;


    // $subtract = function($n1, $n2){
    //     return $n1- $n2;
    // };

    // echo $subtract (10, 4);


    // Arow function

    // $multification = fn($n1, $n2) => $n1 * $n2;

    // echo $multification(5, 3);


    $division = fn($n1,$n2) => $n1 / $n2;

    echo  $division(30,6); 


?>