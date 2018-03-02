<?php

namespace Amadeus\Client\RequestOptions\Cruise;

use Amadeus\Client\RequestOptions\CruiseBaseOptions;

class CancelBookingOptions extends CruiseBaseOptions
{
    /**
     * Amadeus Record Locator for PNR
     * @var string
     */
    public $recordLocator;

    public $referenceType;
    public $uniqueReference;

    public $cruiseLineCode;

    public $date;

    public $shipCode;

    public $duration;

    public $currencyQualifier;

    public $currencyIsoCode;
}