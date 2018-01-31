<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\PriceBookingOptions;
use Amadeus\Client\Struct\Cruise\PriceBooking;

class PriceBookingConv extends BaseConverter
{
    /**
     * @param PriceBookingOptions $requestOptions
     * @param int|string $version
     * @return PriceBooking
     */
    public function convert($requestOptions, $version)
    {
        return new PriceBooking($requestOptions);
    }

}