<?php
$number = 19091;
$str = (string)$number;
$reversed = strrev($str);
if ($str === $reversed) {
    echo "число $number читается одинаково\n";
} else {
    echo "число $number не читается одинаково\n";
}
?>