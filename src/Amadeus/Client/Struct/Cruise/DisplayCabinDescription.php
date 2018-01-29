<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\DisplayCabinDescriptionOptions;
use Amadeus\Client\Struct\BaseWsMessage;

class DisplayCabinDescription extends BaseWsMessage
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
                    [
                        'categoryId' => [
                            'berthedCategory' => $params->pricedCategory,
                        ],
                    ],
                    [
                        'categoryId' => [
                            'cabinNbr' => $params->cabinNumber,
                        ],
                    ],
                ],
            ],
        ];
    }

}