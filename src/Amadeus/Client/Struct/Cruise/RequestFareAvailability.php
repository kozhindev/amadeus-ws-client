<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\RequestFareAvailabilityOptions;

class RequestFareAvailability extends BaseCruiseMessage
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
        parent::__construct($params);

        $this->processingInfo = static::getProcessingInfo();

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