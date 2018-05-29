<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\RequestCategoryAvailabilityOptions;

class RequestCategoryAvailability extends BaseCruiseMessage
{
    public $processingInfo;

    public $numberOfUnitsDescription;

    public $sailingGroup;


    /**
     * Authenticate constructor.
     *
     * @param RequestCategoryAvailabilityOptions $params
     */
    public function __construct(RequestCategoryAvailabilityOptions $params)
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
            ],
        ];
    }

}