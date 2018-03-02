<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\RequestSailingAvailabilityOptions;

class RequestSailingAvailability extends BaseCruiseMessage
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
                    'cruiselineCode' => $params->cruiseLineCode,
                ],
                'sailingDateTime' => [
                    'packageStartDate' => $params->date,
                ],
            ],
        ];
    }

}