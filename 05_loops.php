<?php
for($x = 0 ; $x <10 ; $x++){
    echo $x . '<br>';
}

echo '<br>';
$x = 0;
while($x != 5){
    echo 'hi <br>';
    $x++;
}

echo '<br>';


$posts = ['first','second','third','fourth','fifth'];

for($y = 0 ;  $y < count($posts); $y++){
    echo $posts[$y] . '<br>';
}
echo '<br>';
// using for each

foreach($posts as $post){
    echo $post . '<br>';
}

//with index

foreach($posts as $index => $post){
    echo $index . '-' . $post . '<br>';
}


?>