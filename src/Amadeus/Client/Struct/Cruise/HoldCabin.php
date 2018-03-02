<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\HoldCabinOptions;

class HoldCabin extends BaseCruiseMessage
{
    public $numberOfUnitsDescription;

    public $sailingGroup;

    /**
     * Authenticate constructor.
     *
     * @param HoldCabinOptions $params
     */
    public function __construct(HoldCabinOptions $params)
    {
        parent::__construct($params);

        $this->numberOfUnitsDescription = [
            'nbrOfUnitsDetails' => [
                'unitValue' => $params->numberOfUnits,
                'unitQualifier' => 'NI',
            ],
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
                    'cabinInfo' => [
                        'cabinDetails' => [
                            'cabinNbr' => $params->cabinNumber,
                        ],
                    ],
                ],
            ],
        ];
    }

}