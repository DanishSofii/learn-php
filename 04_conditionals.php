<?php
$age = 20;

if($age >= 18){
    echo "You are an adult";
}
else{
    echo "You are not an adult";
}
$t = date("H");
if($t < 12){
    echo "Good Morning";
}
else if($t < 17){
    echo "Good afternoon";
}
else{
    echo "Good evening";
}


$posts = ['first post'];
echo !empty($posts) ? $posts[0] : "No posts";

// coalasion
$firstpost = $posts[0] ?? null;

echo $firstpost
?>