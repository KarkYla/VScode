<?php
$x = 8;
$y = 1;

echo "точка с координатами ($x; $y) находится ";

if ($x === 0 && $y === 0) {
    echo "в точке начала координат (0;0)";
}
elseif ($x === 0) {
    echo "на оси Y";
}
elseif ($y === 0) {
    echo "на оси X";
}
elseif ($x > 0 && $y > 0) {
    echo "в I четверти";
}
elseif ($x < 0 && $y > 0) {
    echo "в II четверти";
}
elseif ($x < 0 && $y < 0) {
    echo "в III четверти";
}
elseif ($x > 0 && $y < 0) {
    echo "в IV четверти";
}
