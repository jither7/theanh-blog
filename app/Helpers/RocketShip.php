<?php

namespace App\Helpers;

use App\Helpers\Contracts\RocketShipContractInterface;

class RocketShip implements RocketShipContractInterface
{
    public function blastOff()
    {
        return 'Houston we have ignition';
    }
}

