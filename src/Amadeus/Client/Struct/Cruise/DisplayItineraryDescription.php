<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\DisplayItineraryDescriptionOptions;

class DisplayItineraryDescription extends BaseCruiseMessage
{
    public $sailingGroup;

    /**
     * Authenticate constructor.
     *
     * @param DisplayItineraryDescriptionOptions $params
     */
    public function __construct(DisplayItineraryDescriptionOptions $params)
    {
        parent::__construct($params);

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