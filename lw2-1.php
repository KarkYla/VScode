<?php

function sortirovka($arr) {
    $n = count($arr);

    if ($n <= 1) {
        return true;
    }

    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            return false;
        }
    }
    return true;
}