<?php

/* ---------- Exceptions ----------- */

/*
    PHP has an exception model similar to that other
    programming languages. An Exception can be thrown, and cought ("catched")
     within PHP. Code may be surrounded in a try block, to facilitate
     the cathing of protential exceptions. Each try must have at least one
     corresponding catch or finally block
*/


function inverse ($x) {

    if(!$x){
        throw new Exception('Division by Zero');
    }

    return 1/$x;
}


try {
  echo inverse(5);
  echo inverse(0);
} catch(Exception $e){
    echo ' Cought Exception ', $e -> getMessage(), ' ';
 } finally {
    echo 'First Finally';
 }

 try {
    echo inverse(5);
    echo inverse(0);
  } catch(Exception $e){
      echo ' Cought Exception ', $e -> getMessage(), ' ';
   } finally {
      echo 'Second Finally';
   }









?>