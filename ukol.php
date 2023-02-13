<?php

require 'Experiment.php';

$dataTypes = ["int", "string", "float", "bool"];
$setValues = [20, 11.3, 0];

class Conversion
{
    public static function convert($from, $to, $value)
    {
        switch ($from) {
            case "int":
                switch ($to) {
                    case "int":
                        return (int) $value;
                    case "float":
                        return (float) $value;
                    case "string":
                        return (string) $value;
                    case "bool":
                        return (bool) $value;
                }
                break;
            case "float":
                switch ($to) {
                    case "int":
                        return (int) $value;
                    case "float":
                        return (float) $value;
                    case "string":
                        return (string) $value;
                    case "bool":
                        return (bool) $value;
                }
                break;
            case "string":
                switch ($to) {
                    case "int":
                        return (int) $value;
                    case "float":
                        return (float) $value;
                    case "string":
                        return (string) $value;
                    case "bool":
                        return (bool) $value;
                }
                break;
            case "bool":
                switch ($to) {
                    case "int":
                        return (int) $value;
                    case "float":
                        return (float) $value;
                    case "string":
                        return (string) $value;
                    case "bool":
                        return (bool) $value;
                }
                break;
        }
    }
}

foreach ($setValues as $value) {
    foreach ($dataTypes as $from) {
        foreach ($dataTypes as $to) {
            $result = Conversion::convert($from, $to, $value);
            echo "$from TO $to (Value = $value) = $result\n";
        }
    }
}
