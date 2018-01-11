<?php

namespace Amadeus\Client\RequestCreator\Converter\Cruise;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Cruise\DisplayItineraryDescriptionOptions;
use Amadeus\Client\Struct\Cruise\DisplayItineraryDescription;

class DisplayItineraryDescriptionConv extends BaseConverter
{
    /**
     * @param DisplayItineraryDescriptionOptions $requestOptions
     * @param int|string $version
     * @return DisplayItineraryDescription
     */
    public function convert($requestOptions, $version)
    {
        return new DisplayItineraryDescription($requestOptions);
    }

}