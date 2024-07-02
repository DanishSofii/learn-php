<?php

$name = $_POST['name'];
$age = $_POST['age'];

?>

<!-- <a href="<? $_SERVER['PHP_SELF']; ?>"> -->

    <form action="<? $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="number" name = "age" placeholder="Age">
        <input type="submit" value="Submit">
        <!-- <input type="submit" value="submit" placeholder="submit"> -->
    </form>
</a>