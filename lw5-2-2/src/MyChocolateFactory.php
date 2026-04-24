<?php

namespace App;

use SnackLibrary\ChocolateFactory;
use SnackLibrary\Snack;
use Exception;

class MyChocolateFactory extends ChocolateFactory
{
    protected function createSnack(string $type): Snack
    {
        if ($type === 'snickers') {
            return new Snickers();
        } elseif ($type === 'bounty') {
            return new Bounty();
        } elseif ($type === 'twix') {
            return new Twix();
        }
        
        throw new Exception("Неизвестный тип snack-а");
    }
}
