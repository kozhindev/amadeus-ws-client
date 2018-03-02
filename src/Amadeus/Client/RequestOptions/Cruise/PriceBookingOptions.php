<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\CruiseBaseOptions;

class PriceBookingOptions extends CruiseBaseOptions
{
    public $cruiseLineCode;

    public $date;

    public $shipCode;

    public $duration;


    public $numberOfUnits;


    public $currencyQualifier;

    public $currencyIsoCode;


    public $modeOfTransportCode;

    public $modeOfTransportCity;

    public $modeOfTransportStatus;


    public $fareCode;

    public $pricedCategory;

    public $berthedCategory;

    public $cabinNumber;

    public $travellerLastName;
}