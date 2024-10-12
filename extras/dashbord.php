<?php

session_start();

if(isset($_SESSION['username'])){
    echo '<h1> Welcom ' . $_SESSION['username'] . '</h1>';
    echo '<a href="logout.php"> Log Out</a>';
} else{
    echo '<h1> Welcome Guest </h1>';
    echo '<a href="../13_Sessions.php">Home</a>';
}



?>
