<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\UnholdCabinOptions;
use Amadeus\Client\Struct\Cruise\UnholdCabin;

class UnholdCabinConv extends BaseConverter
{
    /**
     * @param UnholdCabinOptions $requestOptions
     * @param int|string $version
     * @return UnholdCabin
     */
    public function convert($requestOptions, $version)
    {
        return new UnholdCabin($requestOptions);
    }

}