<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\DisplayItineraryDescriptionOptions;
use Amadeus\Client\Struct\BaseWsMessage;

class DisplayItineraryDescription extends BaseWsMessage
{
    public $sailingGroup;

    /**
     * Authenticate constructor.
     *
     * @param DisplayItineraryDescriptionOptions $params
     */
    public function __construct(DisplayItineraryDescriptionOptions $params)
    {
        $this->sailingGroup = [
            'sailingDescription' => [
                'providerDetails' => [
                    'shipCode' => $params->shipCode,
                    'cruiselineCode' => $params->cruiseLineCode,
                ],
                'sailingDateTime' => [
                    'packageStartDate' => $params->date,
                    'packageDuration' => $params->duration,
                ],
            ],
        ];
    }

}