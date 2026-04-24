<?php

namespace App;

use SnackLibrary\Snack;

class Twix extends Snack
{
    public function __construct()
    {
        $this->name = "Twix";
        $this->chocolate = "Молочный";
        $this->toppings = ["Карамель", "Печенье"];
    }
}
