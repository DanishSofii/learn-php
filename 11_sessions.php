<?php

session_start();

if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($name == 'john' && $password = 'password'){
        $_SESSION['name'] = $name;
        header('Location: /php-crash/dashboard.php');

    }
    else{
        echo ' Incorrect pass';
    }
}
?>

<!-- <a href="<? $_SERVER['PHP_SELF']; ?>"> -->

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="password" name = "password" placeholder="password">
        <input type="submit" value="Submit" name = "submit">
        <!-- <input type="submit" value="submit" placeholder="submit"> -->
    </form>
</a>