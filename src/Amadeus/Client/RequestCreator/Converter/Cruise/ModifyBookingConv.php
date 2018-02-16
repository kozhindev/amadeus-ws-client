<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\ModifyBookingOptions;
use Amadeus\Client\Struct\Cruise\ModifyBooking;

class ModifyBookingConv extends BaseConverter
{
    /**
     * @param ModifyBookingOptions $requestOptions
     * @param int|string $version
     * @return ModifyBooking
     */
    public function convert($requestOptions, $version)
    {
        return new ModifyBooking($requestOptions);
    }

}