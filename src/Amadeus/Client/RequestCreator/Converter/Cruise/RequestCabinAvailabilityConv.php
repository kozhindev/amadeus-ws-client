<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\RequestCabinAvailabilityOptions;
use Amadeus\Client\Struct\Cruise\RequestCabinAvailability;

class RequestCabinAvailabilityConv extends BaseConverter
{
    /**
     * @param RequestCabinAvailabilityOptions $requestOptions
     * @param int|string $version
     * @return RequestCabinAvailability
     */
    public function convert($requestOptions, $version)
    {
        return new RequestCabinAvailability($requestOptions);
    }

}