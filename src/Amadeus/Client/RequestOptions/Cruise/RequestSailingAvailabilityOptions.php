<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\Base;

class RequestSailingAvailabilityOptions extends Base
{
    public $cruiseLineCode;

    public $date;

    public $numberOfUnits;
}