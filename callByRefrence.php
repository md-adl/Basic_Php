<?php
function add_sum(&$value){ // call By Reference(copy the value of which we pass)
    $value +=5;
}
$num = 10;
add_sum($num);
echo $num;
?>