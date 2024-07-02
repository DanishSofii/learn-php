<?php
$string = 'hello world';

echo strpos($string,'o');
echo strrpos($string, 'o');
echo substr($string,0,5);
echo strrev($string);
echo strtolower($string);
echo strtoupper($string);
echo ucwords($string);
echo str_replace('world','danish',$string);

var_dump(str_starts_with($string, "h"));
var_dump(str_ends_with($string,'d'));



?>

