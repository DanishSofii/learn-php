<?php
function registerUser($email){
    echo $email . ' User registered <br>';
}
// registerUser('dbs@gmail.com');

function sum($n1, $n2){
    return $n1 + $n2;
}

$s = sum(5,5);
echo $s . '<br>';


//anonymous funcitons :

$subtract = function($n1,$n2){
    return $n1 - $n2;
};

echo $subtract(10,5) . '<br>';


//arrow functions:

$multiply = fn($n1,$n2) => $n1 * $n2;

echo $multiply(5,5) . '<br>';
?>