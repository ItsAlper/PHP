<?php
function addNumbers($a, $b) {
  return $a + $b;
}

$num1 = "5";
$num2 = 10;

//Implicitní přetypování "5" na int
$result = addNumbers($num1, $num2);

echo "Result: " . $result . "\n"; 
// výstup: Result: 15
