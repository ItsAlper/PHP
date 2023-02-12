<?php

// Funkce, která očekává int a vrací bool
function isPositiveInt(int $number): bool {
  if ($number > 0) {
    return true;
  }
  return false;
}

// Implicitní přetypování float na int
$floatValue = 3.14;
$result = isPositiveInt($floatValue);

// $result bude false, protože při implicitním přetypování
// se ztratí část desetinných míst a $floatValue se stane 3

// Explicitní konverze
$explicitInt = (int) $floatValue;
$result = isPositiveInt($explicitInt);

// $result bude true, protože $explicitInt bude 3

// Funkce, která očekává bool a vrací string
function boolToString(bool $value): string {
  if ($value) {
    return "True";
  }
  return "False";
}

// Implicitní přetypování int na bool
$intValue = 0;
$result = boolToString($intValue);

// $result bude "False", protože při implicitním přetypování
// bude $intValue přetypován na False

// Explicitní konverze
$explicitBool = (bool) $intValue;
$result = boolToString($explicitBool);

// $result bude "False", protože $explicitBool bude False