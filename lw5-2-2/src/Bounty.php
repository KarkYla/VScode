<?php

namespace App;

use SnackLibrary\Snack;

class Bounty extends Snack
{
    public function __construct()
    {
        $this->name = "Bounty";
        $this->chocolate = "Молочный";
        $this->toppings = ["Кокосовая стружка"];
    }
}
