<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\CancelBookingOptions;
use Amadeus\Client\Struct\Cruise\CancelBooking;

class CancelBookingConv extends BaseConverter
{
    /**
     * @param CancelBookingOptions $requestOptions
     * @param int|string $version
     * @return CancelBooking
     */
    public function convert($requestOptions, $version)
    {
        return new CancelBooking($requestOptions);
    }

}