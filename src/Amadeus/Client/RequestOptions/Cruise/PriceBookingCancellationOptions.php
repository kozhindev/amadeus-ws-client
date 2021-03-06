<?php

namespace Amadeus\Client\RequestOptions\Cruise;

use Amadeus\Client\RequestOptions\CruiseBaseOptions;

class PriceBookingCancellationOptions extends CruiseBaseOptions
{
    public $cruiseLineCode;

    public $date;

    public $shipCode;

    public $duration;

    public $currencyQualifier;

    public $currencyIsoCode;

    /**
     * Amadeus Record Locator for PNR
     * @var string
     */
    public $recordLocator;

    public $bookingQualifierValue;
    public $bookingQualifierStatus;
}