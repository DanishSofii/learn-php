<?php
//set cookie for one month 86400 = day

setcookie('name','dbs',time() + 86400 *30);

//get cookie

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

//delete cookie

setcookie('name','',time() - 86400);

?>