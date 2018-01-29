<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\RequestCabinAvailabilityOptions;
use Amadeus\Client\Struct\BaseWsMessage;

class RequestCabinAvailability extends BaseWsMessage
{
    public $processingInfo;

    public $numberOfUnitsDescription;

    public $sailingGroup;


    /**
     * Authenticate constructor.
     *
     * @param RequestCabinAvailabilityOptions $params
     */
    public function __construct(RequestCabinAvailabilityOptions $params)
    {
        $this->processingInfo = [
            'processingDetails' => [
                'businessType' => 5,
                'function' => 56,
            ],
        ];

        $this->numberOfUnitsDescription = [
            'nbrOfUnitsDetails' => [
                [
                    'unitValue' => $params->numberOfUnits,
                    'unitQualifier' => 'NI',
                ],
                [
                    'unitValue' => 2,
                    'unitQualifier' => 'PA',
                ],
            ]
        ];

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
            'currencyInfo' => [
                'currencyList' => [
                    'currencyQualifier' => $params->currencyQualifier,
                    'currencyIsoCode' => $params->currencyIsoCode,
                ],
            ],
            'modeOfTransportation' => [
                'transportationInfo' => [
                    'modeOfTransport' => $params->modeOfTransportCode,
                    'motCity' => $params->modeOfTransportCity,
                ],
                'motStatus' => $params->modeOfTransportStatus,
            ],
            'fareGroup' => [
                'fareCode' => [
                    'fareCodeId' => [
                        'cruiseFareCode' => $params->fareCode,
                    ],
                ],
                'categoryGroup' => [
                    'categoryInfo' => [
                        'categoryId' => [
                            'pricedCategory' => $params->pricedCategory,
                            'berthedCategory' => $params->berthedCategory,
                        ],
                    ],
                ],
            ],
        ];
    }

}