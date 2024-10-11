<?php
  /* ------------For Loop-------- */

   /* Syntax 

       for(intialize; condition; increment){
        // Code Block
       }

    */

    // for($x = 0; $x <= 10; $x++){
    //     echo $x .'<br>';
    // }

  /* ------------While Loop-------- */

   /* Syntax 

    while (Condition){
        // Code block;
    }
    */

    // $x = 1;

    // while($x <= 15){
    //     echo 'Number '. $x . '<br>';
    //     $x++;
    // }

  /* ------------Do While Loop-------- */

    /* Syntax

        do{
            //code block;
        } while (condition);

    */

    // $x = 1;

    //     do{
    //         echo 'Number' . $x. '<br>';
    //         $x++;

    //     }while ($x <= 5);

        // When you run do-while loop the code block is executed at least one time befor check the comdition.




  /* ------------For Each Loop-------- */

  /* Syntax 

        foreach ($array as $value) {
            // code to be executed
        }

   */
  
   $posts = ['first post', 'second post', 'third post'];

    // for($x = 0; $x < count($posts); $x++){
    //     echo $posts[$x];
    // }

        // For each Print

    // foreach($posts as $post){
    //     echo $post;
    // }

    // For each print with Index

    // foreach($posts as $index => $post){
    //     echo $index. ' - ' .$post. '<br>';
    // }

    // Asocciative Arrays

    // $person = [
    //     'first_name' => 'Nimesh',
    //     'last_name' => 'Kavinda',
    //     'email' => 'nimesh@gmail.com',
    // ];

    // $x = 1;

    // foreach ($person as $key => $value){
    //     echo "$x $key - $value <br>";
    //     $x++;
    // }

?>