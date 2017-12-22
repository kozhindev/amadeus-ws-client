<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\RequestFareAvailabilityOptions;
use Amadeus\Client\Struct\BaseWsMessage;

class RequestFareAvailability extends BaseWsMessage
{
    public $processingInfo;

    public $numberOfUnitsDescription;

    public $sailingGroup;


    /**
     * Authenticate constructor.
     *
     * @param RequestFareAvailabilityOptions $params
     */
    public function __construct(RequestFareAvailabilityOptions $params)
    {
        $this->processingInfo = [
            'processingDetails' => [
                'businessType' => 5,
                'function' => 56,
            ],
        ];

        $this->numberOfUnitsDescription = [
            'nbrOfUnitsDetails' => [
                'unitValue' => $params->numberOfUnits,
                'unitQualifier' => 'NI',
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
            'travellerGroup' => [
                'passengerInfo' => [
                    'paxDetails' => [
                        'surname' => $params->surname,
                    ],
                ],
            ],
            'currencyInfo' => [
                'currencyList' => [
                    'currencyQualifier' => $params->currencyQualifier,
                    'currencyIsoCode' => $params->currencyIsoCode,
                ],
            ],
        ];
    }

}