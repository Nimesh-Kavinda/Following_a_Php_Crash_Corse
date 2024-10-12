<?php

/*
Cookies are a mechanism for storing data in the remote browser and thus tracking
or identifying return users.You can set specific data to be stored in the browser, 
and then retrive it when the user visit site again.
*/


// set Cookie

setcookie('name', 'Nimesh', time() + 86400 * 30); 

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

// to delete cookie set it to past

setcookie('name', '', time() - 86400 * 30); 




?>