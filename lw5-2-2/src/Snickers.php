<?php

namespace App;

use SnackLibrary\Snack;

class Snickers extends Snack
{
    public function __construct()
    {
        $this->name = "Snickers";
        $this->chocolate = "Молочный";
        $this->toppings = ["Карамель", "Арахис", "Нуга"];
    }
}
