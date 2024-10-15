<?php

/* ----------- Object-Oriented Programming ---------- */

/* 
    From PHPS onwards you can write PHP in either a procedural or
    object-oriented way. OOP consists of classes that can hold "Properties" 
    and "methods". Objects can be created from classes.
*/


class User {
    // Properties are attributes that belong to a class
    public $name;
    public $email;
    public $password; 

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password){
       $this -> name = $name;
       $this -> email = $email;
       $this -> password = $password;
    }

    // Method is a function that belongs to a class
    function set_name ($name){
        $this -> name = $name;
    }

    function get_name() {
        return $this -> name;
    }
}

// Instantiate a User Object
$user1 = new User('Nimesh', 'mmm@gmail.com', '123');
$user2 = new User('Kavinda', 'kavi@gmail.com', '234');

// $user1-> set_name('Kavinda');
// $user2-> set_name('Nimesh');

// echo $user1 -> email;
// echo $user2 -> name;

// echo $user1 -> get_name();
// echo $user2 -> get_name();

// Inheritance 
class Employee extends User {
    // Declare the title property
    public $title;

    public function __construct($name, $email, $password, $title)
    {
        // Call the parent constructor
        parent::__construct($name, $email, $password);
        // Assign the title
        $this -> title = $title;
    }

    public function get_title(){
        return $this -> title;
    }
}

// Instantiate an Employee Object
$employee1 = new Employee('Ravi', 'ravi@gmail.com', '456', 'Manager');
echo $employee1->get_title();

?>
