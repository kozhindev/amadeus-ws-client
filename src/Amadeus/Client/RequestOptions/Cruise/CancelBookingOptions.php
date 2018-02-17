<?php

namespace Amadeus\Client\RequestOptions\Cruise;

use Amadeus\Client\RequestOptions\Base;

class CancelBookingOptions extends Base
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