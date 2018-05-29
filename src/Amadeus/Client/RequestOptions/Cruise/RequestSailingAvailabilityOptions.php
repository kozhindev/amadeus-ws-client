<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\CruiseBaseOptions;

class RequestSailingAvailabilityOptions extends CruiseBaseOptions
{
    public $cruiseLineCode;

    public $date;

    public $numberOfGuests;
    public $numberOfChildren;
}