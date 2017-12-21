<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\RequestSailingAvailabilityOptions;
use Amadeus\Client\Struct\BaseWsMessage;

class RequestSailingAvailability extends BaseWsMessage
{
    public $processingInfo;

    public $numberOfUnitsDescription;

    public $sailingGroup;


    /**
     * Authenticate constructor.
     *
     * @param RequestSailingAvailabilityOptions $params
     */
    public function __construct(RequestSailingAvailabilityOptions $params)
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
                    'cruiselineCode' => $params->cruiseLineCode,
                ],
                'sailingDateTime' => [
                    'packageStartDate' => $params->date,
                ],
            ],
        ];
    }

}