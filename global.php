<?php
$x = 10;
$y = 20;

function test(){
    // global $x, $y; // global keyword is used to access the global variable

    $GLOBALS['x'] = $GLOBALS['x']  + $GLOBALS['y'] 
}

test();

echo $x;
?>