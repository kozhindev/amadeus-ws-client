<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\CruiseBaseOptions;

class RequestFareAvailabilityOptions extends CruiseBaseOptions
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