<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\CruiseBaseOptions;

class CreateBookingOptions extends CruiseBaseOptions
{
    public $cruiseLineCode;
    public $date;
    public $shipCode;
    public $duration;
    public $numberOfUnits;
    public $currencyQualifier;
    public $currencyIsoCode;
    public $arrivalPortCode;
    public $departurePortCode;

    public $fareCode;
    public $pricedCategory;
    public $berthedCategory;
    public $cabinNumber;

    public $travellers;

    public $phoneNumber;
    public $insuranceCodes = [];

    public $diningLabel;
    public $diningStatus;
}