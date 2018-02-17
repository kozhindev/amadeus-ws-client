<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\CancelBookingOptions;

class CancelBooking extends BaseCruiseMessage
{
    public $bookingReference;
    public $bookingQualifier;
    public $sailingGroup;

    /**
     * Authenticate constructor.
     *
     * @param CancelBookingOptions $params
     */
    public function __construct(CancelBookingOptions $params)
    {
        $this->bookingReference = [
            'referenceType' => $params->referenceType,
            'uniqueReference' => $params->uniqueReference,
        ];

        $this->bookingQualifier = [
            [
                'partyQualifier' => 8,
                'componentDetails' => [
                    'componentQualifier' => 10,
                    'componentDescription' => 'M',
                ],
            ],
            [
                'partyQualifier' => 1,
                'itemDescription' => [
                    'value' => $params->recordLocator,
                ],
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
        ];
    }

}