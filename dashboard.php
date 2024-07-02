<?php
session_start();

if(isset($_SESSION['name'])){
    echo '<h1?>welcome' . $_SESSION['name'] .'</h1>';
}
else{
    echo '<h1> welcome guest</h1>';
}


?>
