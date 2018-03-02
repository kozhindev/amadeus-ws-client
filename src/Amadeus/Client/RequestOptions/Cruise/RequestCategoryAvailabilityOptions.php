<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\CruiseBaseOptions;

class RequestCategoryAvailabilityOptions extends CruiseBaseOptions
{
    public $cruiseLineCode;

    public $shipCode;

    public $date;

    public $duration;

    public $numberOfUnits;

    public $currencyQualifier;

    public $currencyIsoCode;

    public $modeOfTransportCode;

    public $modeOfTransportCity;

    public $modeOfTransportStatus;

    public $fareCode;
}