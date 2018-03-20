<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\PriceBookingOptions;

class PriceBooking extends BaseCruiseMessage
{
    public $nbrOfGuests;

    public $sailingGroup;

    /**
     * Authenticate constructor.
     *
     * @param PriceBookingOptions $params
     */
    public function __construct(PriceBookingOptions $params)
    {
        parent::__construct($params);

        $this->nbrOfGuests = [
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
            'travellerGroup' => [
                'passengerInfo' => [
                    'travellerId' => [
                        'lastName' => $params->travellerLastName,
                    ],
                ],
                'modeOfTransportation' => [
                    'transportationInfo' => [
                        'modeOfTransport' => $params->modeOfTransportCode,
                        'motCity' => $params->modeOfTransportCity,
                    ],
                    'motStatus' => $params->modeOfTransportStatus,
                ],
                'fareCode' => [
                    'fareCodeId' => [
                        'cruiseFareCode' => $params->fareCode,
                    ],
                ],
            ],
        ];
    }

}