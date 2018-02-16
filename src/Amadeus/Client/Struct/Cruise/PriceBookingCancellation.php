<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\PriceBookingCancellationOptions;

class PriceBookingCancellation extends BaseCruiseMessage
{
    public $sailingGroup;

    /**
     * Authenticate constructor.
     *
     * @param PriceBookingCancellationOptions $params
     */
    public function __construct(PriceBookingCancellationOptions $params)
    {
        $this->sailingGroup = [
        ];
    }

}