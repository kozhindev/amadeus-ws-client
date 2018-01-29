<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\HoldCabinOptions;
use Amadeus\Client\Struct\Cruise\HoldCabin;

class HoldCabinConv extends BaseConverter
{
    /**
     * @param HoldCabinOptions $requestOptions
     * @param int|string $version
     * @return HoldCabin
     */
    public function convert($requestOptions, $version)
    {
        return new HoldCabin($requestOptions);
    }

}