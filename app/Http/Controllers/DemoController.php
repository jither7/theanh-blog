<?php

namespace App\Http\Controllers;

use App\Helpers\Contracts\RocketShipContractInterface;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(RocketShipContractInterface $rocketShipContract)
    {
        $boom = $rocketShipContract->blastOff();

        return view('demo.index', compact('boom'));
    }
}
