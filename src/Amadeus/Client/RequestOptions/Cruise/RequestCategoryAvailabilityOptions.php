<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\Base;

class RequestCategoryAvailabilityOptions extends Base
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