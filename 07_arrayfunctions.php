<?php
$fruits = ['apple','mango','banana'];
$lengthFruits = count($fruits);
// echo $lengthFruits;

//search in array
// var_dump(in_array('apple',$fruits));

$fruits[] = 'grapes';
// print_r($fruits);

array_push($fruits,'olive');

// print_r($fruits);

// add at front
array_unshift($fruits, 'dragonfruit');

// print_r($fruits);

// remove from end
array_pop($fruits);

//remove from front
array_shift($fruits);

// remove a specific element 
unset($fruits[2]);

print_r($fruits);


$newFruits = ['orange','dates','peach'];

$concatenated_array = array_merge($fruits,$newFruits);
print_r($concatenated_array);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = [...$arr1,...$arr2];

print_r($arr3);

$combined_array = array_combine($fruits,$newFruits);

echo '<br>';

print_r($combined_array);

//get keys

$keys = array_keys($combined_array);

echo '<br>';

print_r($keys);

$numbers = range(1,20);


//map function
$newNum = array_map(function($number) {
    return $number * 2;
},$numbers);

echo '<br>';

print_r($newNum);



?>