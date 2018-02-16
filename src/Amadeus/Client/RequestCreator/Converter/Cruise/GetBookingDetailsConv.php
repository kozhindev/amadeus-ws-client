<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\GetBookingDetailsOptions;
use Amadeus\Client\Struct\Cruise\GetBookingDetails;

class GetBookingDetailsConv extends BaseConverter
{
    /**
     * @param GetBookingDetailsOptions $requestOptions
     * @param int|string $version
     * @return GetBookingDetails
     */
    public function convert($requestOptions, $version)
    {
        return new GetBookingDetails($requestOptions);
    }

}