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
            'nbrOfUnitsDetails' =>
                array_merge(
                    [[
                        'unitValue' => $params->numberOfGuests + $params->numberOfChildren,
                        'unitQualifier' => 'NI',
                    ]],
                    array_fill(0, $params->numberOfGuests, [
                        'unitValue' => static::GROWN_AGE,
                        'unitQualifier' => 'AG',
                    ]),
                    array_fill(0, $params->numberOfChildren, [
                        'unitValue' => static::CHILD_AGE,
                        'unitQualifier' => 'AG',
                    ])
                )
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