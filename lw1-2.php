<?php
$sum = 500;
$skidka = 0;
$finalSUM = $sum;
if ($sum >= 10000) {
    $skidka = 20;  
} elseif ($sum >= 5000 && $sum < 10000) {
    $skidka = 10;
} else {
    $skidka = 0;
}

if ($skidka > 0) {
    $sumSkidki = $sum * ($skidka / 100);
    $finalSUM = $sum - $sumSkidki;
}
echo "Сумма покупки: $sum\n";
echo "Скидка: $skidka%\n";
echo "Итоговая сумма: $finalSUM\n";
?>