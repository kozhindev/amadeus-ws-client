<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\PriceBookingCancellationOptions;
use Amadeus\Client\Struct\Cruise\PriceBookingCancellation;

class PriceBookingCancellationConv extends BaseConverter
{
    /**
     * @param PriceBookingCancellationOptions $requestOptions
     * @param int|string $version
     * @return PriceBookingCancellation
     */
    public function convert($requestOptions, $version)
    {
        return new PriceBookingCancellation($requestOptions);
    }

}