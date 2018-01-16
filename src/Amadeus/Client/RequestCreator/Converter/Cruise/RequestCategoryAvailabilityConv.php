<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\RequestCategoryAvailabilityOptions;
use Amadeus\Client\Struct\Cruise\RequestCategoryAvailability;

class RequestCategoryAvailabilityConv extends BaseConverter
{
    /**
     * @param RequestCategoryAvailabilityOptions $requestOptions
     * @param int|string $version
     * @return RequestCategoryAvailability
     */
    public function convert($requestOptions, $version)
    {
        return new RequestCategoryAvailability($requestOptions);
    }

}