<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\CancelBookingOptions;

class CancelBooking extends BaseCruiseMessage
{
    public $sailingGroup;

    /**
     * Authenticate constructor.
     *
     * @param CancelBookingOptions $params
     */
    public function __construct(CancelBookingOptions $params)
    {
        $this->sailingGroup = [
        ];
    }

}