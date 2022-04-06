<?php
$x = 1;
while($x <=10){
    echo "The number is : $x <br>";
    $x++;
}

$y = 1;
do{
    echo "the number is: $y <br>";
    $y++;
} while($y<=10);

for($z=0; $z<=100; $z +=10){
    echo "The number is : $z <br>";
}
$colors = array("green", "red", "blue", "violet");
foreach($colors as $value){
    echo "$value <br>";
}
?>
