<?php

 /* --------- $_GET  and $_POST are Superglobals ----------- */
    
 /* 
 we can pass data through usrls and forms using the $_GET and $_POST suprglobals
 */

 


if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
};


?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?> ? name=Nimesh & age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<div>
<label for="name">Name: </label>
<input type="text" name="name">
</div>

<div>
<label for="age">Age: </label>
<input type="text" name="age">
</div>
    <input type="submit" value="Submit" name="submit">
</form>