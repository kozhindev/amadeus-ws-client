<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\Base;

class HoldCabinOptions extends Base
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
}