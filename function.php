<?php
function message(){
    echo "Hello uCertify";
}
function familyName($fname, $year){
    echo "$fname Kumar. Born in $year <br>";
}

familyName("Rohit","2000");
familyName("shivam" ,"2000");
familyName("Tanish", "2004");
familyName("Pankaj" ,"2012");
message();

function addNumber(int $a, int $b){
    return $a + $b;
}
echo addNumber(5, "5");

// PHP is loosely typed language strict is not enabled "5" is changed to int(5)
?>