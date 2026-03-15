<?php

function zigzag(array $arr): bool {
    $n = count($arr);

    if ($n <= 2) {
        return true;
    }
    $expected = 0;
    
    for ($i = 1; $i < $n; $i++) {
        $prev = $arr[$i - 1];
        $curr = $arr[$i];

        if ($curr > $prev) {
            $direction = 1;
        } elseif ($curr < $prev) {
            $direction = -1;
        } else {
            return false;
        }
    }
    return true;
}