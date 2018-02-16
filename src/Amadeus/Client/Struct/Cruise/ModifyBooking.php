<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\ModifyBookingOptions;

class ModifyBooking extends BaseCruiseMessage
{
    public $sailingGroup;

    /**
     * Authenticate constructor.
     *
     * @param ModifyBookingOptions $params
     */
    public function __construct(ModifyBookingOptions $params)
    {
        $this->sailingGroup = [
        ];
    }

}