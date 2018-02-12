<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\CreateBookingOptions;
use Amadeus\Client\Struct\Cruise\CreateBooking;

class CreateBookingConv extends BaseConverter
{
    /**
     * @param CreateBookingOptions $requestOptions
     * @param int|string $version
     * @return CreateBooking
     */
    public function convert($requestOptions, $version)
    {
        return new CreateBooking($requestOptions);
    }

}