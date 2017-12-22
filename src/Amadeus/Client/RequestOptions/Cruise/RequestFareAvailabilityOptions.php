<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\Base;

class RequestFareAvailabilityOptions extends Base
{
    public $cruiseLineCode;

    public $date;

    public $numberOfUnits;

    public $surname;

    public $shipCode;

    public $duration;

    public $currencyQualifier;

    public $currencyIsoCode;
}