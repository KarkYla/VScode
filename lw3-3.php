<?php

function mergeUnique(array $a, array $b): array
{
    $result = [];

    $combined = [];
    foreach ($a as $item) {
        $combined[] = $item;
    }
    foreach ($b as $item) {
        $combined[] = $item;
    }

    foreach($combined as $currentValue) {
        $isDupe = false;

        foreach ($result as $alreadyAdded) {
            if ($currentValue === $alreadyAdded) {
                $isDupe = true;
                break;
            }
        }

        if (!$isDupe) {
            $result[] = $currentValue;
        }
    }
    return $result;

}

$arr1 = [1, 2, 3, "apple"];
$arr2 = [3, 4, 5, "apple", "orange"];

$result = mergeUnique($arr1, $arr2);
print_r($result);