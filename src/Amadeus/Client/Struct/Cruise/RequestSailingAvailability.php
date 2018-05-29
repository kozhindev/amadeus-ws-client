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
                    'cruiselineCode' => $params->cruiseLineCode,
                ],
                'sailingDateTime' => [
                    'packageStartDate' => $params->date,
                ],
            ],
        ];
    }

}