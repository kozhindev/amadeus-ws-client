<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\DisplayCabinDescriptionOptions;
use Amadeus\Client\Struct\Cruise\DisplayCabinDescription;

class DisplayCabinDescriptionConv extends BaseConverter
{
    /**
     * @param DisplayCabinDescriptionOptions $requestOptions
     * @param int|string $version
     * @return DisplayCabinDescription
     */
    public function convert($requestOptions, $version)
    {
        return new DisplayCabinDescription($requestOptions);
    }

}