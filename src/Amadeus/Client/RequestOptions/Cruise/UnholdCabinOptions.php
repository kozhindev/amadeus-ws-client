<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\Base;

class UnholdCabinOptions extends Base
{
    public $cruiseLineCode;

    public $date;

    public $shipCode;

    public $duration;


    public $cabinNumber;
}