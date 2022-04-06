<?php  
function adder($x)  // call By value modification of value does not change the insie the function It is called call By value
{  
$x = 'I do not change the value because i am the call By value';  
}  
$y = 'Hello uCertify';  
adder($y);  
echo $y;  
?> 