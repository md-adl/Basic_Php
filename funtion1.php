<?php declare(strict_types=1); // strict requirement
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}
function addNumbers(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbers(1.2, 5.2);
echo "<br>";

echo "10 + 20 = " . sum(10, 20) . "<br>";
echo "89 + 13 = " . sum(89, 13) . "<br>";
echo "27 + 41 = " . sum(27, 41);
?>