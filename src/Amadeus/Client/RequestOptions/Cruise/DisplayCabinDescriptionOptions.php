<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\CruiseBaseOptions;

class DisplayCabinDescriptionOptions extends CruiseBaseOptions
{
    public $cruiseLineCode;

    public $date;

    public $shipCode;

    public $duration;

    public $pricedCategory;

    public $cabinNumber;
}