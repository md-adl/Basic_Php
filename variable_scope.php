<?php
$x = 10; // global scope 

function  test(){
    // using x inside this funtion will generate an error
    echo "<p>variable x inside function is :$x </p>";
}

test();
echo "<p>Variable x Outside funtion is : $x</p>";

function test1(){
    $y = 10; // local Scope
    echo "<h4>Variable y inside function is : $y</h4>";
}
test1();
// using x outside the function will generate an error
echo "<h4>Varible y outside function is : $y</h4>"

