<?php
/* -------------- Sessions ------------ */

/*
    Sessions are a way to store informations (in varibles) to
    be used across multiple pages.
    Unlike cookies, sessions are stored in the server
*/

session_start();

if(isset($_POST['submit'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password = $_POST['password'];



if( $username == 'nimesh' && $password == 'password'){
    $_SESSION['username'] = $username;
    header('Location:/Following_a_Php_Crash_Corse/extras/dashbord.php');
} else {
    echo 'Incorrect Login';
};


};

?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

<div>
<label for="username">User Name: </label>
<input type="text" name="username">
</div>

<div>
<label for="password">Password: </label>
<input type="password" name="password">
</div>
    <input type="submit" value="Submit" name="submit">
</form>