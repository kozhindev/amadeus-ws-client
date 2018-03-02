<?php

namespace Amadeus\Client\RequestOptions\Cruise;

use Amadeus\Client\RequestOptions\CruiseBaseOptions;

class GetBookingDetailsOptions extends CruiseBaseOptions
{
    public $referenceType;
    public $uniqueReference;
}