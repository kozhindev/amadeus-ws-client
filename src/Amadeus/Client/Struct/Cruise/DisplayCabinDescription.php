<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\DisplayCabinDescriptionOptions;

class DisplayCabinDescription extends BaseCruiseMessage
{
    public $sailingGroup;

    /**
     * Authenticate constructor.
     *
     * @param DisplayCabinDescriptionOptions $params
     */
    public function __construct(DisplayCabinDescriptionOptions $params)
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
            'categoryGroup' => [
                'categoryInfo' => [
                    'categoryId' => [
                        'berthedCategory' => $params->pricedCategory,
                    ],
                ],
                'cabinInfo' => [
                    'cabinDetails' => [
                        'cabinNbr' => $params->cabinNumber,
                    ],
                ],
            ],
        ];
    }

}