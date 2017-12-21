<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\RequestSailingAvailabilityOptions;
use Amadeus\Client\Struct\Cruise\RequestSailingAvailability;

class RequestSailingAvailabilityConv extends BaseConverter
{
    /**
     * @param RequestSailingAvailabilityOptions $requestOptions
     * @param int|string $version
     * @return RequestSailingAvailability
     */
    public function convert($requestOptions, $version)
    {
        return new RequestSailingAvailability($requestOptions);
    }

}