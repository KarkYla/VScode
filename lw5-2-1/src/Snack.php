<?php

namespace SnackLibrary;

abstract class Snack
{
    public string $name = '';
    public string $chocolate = '';
    public array $toppings = [];

    public function prepare(): void
    {
        echo "Cоздание snack-а " . $this->name . "\n";
        echo "Добавляется шоколад " . $this->chocolate . "\n";
        echo "Добавлены начинок: " . implode(", ", $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "snack нужно резать по вертикали\n";
    }
}
