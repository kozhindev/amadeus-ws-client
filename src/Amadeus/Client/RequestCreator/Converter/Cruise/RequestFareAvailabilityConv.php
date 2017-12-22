<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\RequestFareAvailabilityOptions;
use Amadeus\Client\Struct\Cruise\RequestFareAvailability;

class RequestFareAvailabilityConv extends BaseConverter
{
    /**
     * @param RequestFareAvailabilityOptions $requestOptions
     * @param int|string $version
     * @return RequestFareAvailability
     */
    public function convert($requestOptions, $version)
    {
        return new RequestFareAvailability($requestOptions);
    }

}