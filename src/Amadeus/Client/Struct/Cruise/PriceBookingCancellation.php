<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\PriceBookingCancellationOptions;

class PriceBookingCancellation extends BaseCruiseMessage
{
    public $bookingQualifier;
    public $sailingGroup;

    /**
     * Authenticate constructor.
     *
     * @param PriceBookingCancellationOptions $params
     */
    public function __construct(PriceBookingCancellationOptions $params)
    {
        parent::__construct($params);

        $this->bookingQualifier = [
            'partyQualifier' => 1,
            'itemDescription' => [
                'value' => $params->bookingQualifierValue,
                'status' => $params->bookingQualifierStatus,
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