<?php

namespace App\Helpers;

use App\Helpers\Contracts\RocketShipContractInterface;

class RocketLunch implements RocketShipContractInterface
{

    public function blastOff()
    {
        return "This is RocketLunch";
    }
}