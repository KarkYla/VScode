<?php

function sumDiagonal($matrix) {

    $n = count($matrix);

    for ($i = 0; $i < $n; $i++) {
        if (count($matrix[$i]) !== $n) {
            die("Матрица должна быть квадратной");
        }
    }
    $sum = 0;
    for ($i = 0; $i < $n; $i++) {
        $j = $n - 1 - $i;
        $sum += $matrix[$i][$j];
        echo "Элемент [$i][$j] = {$matrix[$i][$j]}\n";
    }
    return $sum;
}
$matrix = [
    [1,  2,  3],
    [4,  5,  6],
    [7,  8,  9]
];

$result = sumDiagonal($matrix);
echo "Сумма элементов побочной диагонали: $result\n";