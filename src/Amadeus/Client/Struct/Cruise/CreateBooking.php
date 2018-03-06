<?php

namespace Amadeus\Client\Struct\Cruise;

use Amadeus\Client\RequestOptions\Cruise\CreateBookingOptions;

class CreateBooking extends BaseCruiseMessage
{
    public $contactInfo;
    public $bookingQualifier;
    public $nbrOfGuests;
    public $sailingGroup;
    public $diningGroup;
    public $insuranceGroup;

    /**
     * Authenticate constructor.
     *
     * @param CreateBookingOptions $params
     */
    public function __construct(CreateBookingOptions $params)
    {
        parent::__construct($params);

        $this->contactInfo = [
            'contactDetails' => [
                'partyQualifierType' => 'AGT',
                'phoneNumber' => $params->phoneNumber,
            ],
        ];

        $this->bookingQualifier = [
            'partyQualifier' => 8,
            'componentDetails' => [
                'componentQualifier' => 10,
                'componentDescription' => 'M',
            ],
        ];

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
                'arrivalAndDeparturePort' => [
                    [
                        'code' => $params->arrivalPortCode,
                    ],
                    [
                        'code' => $params->departurePortCode,
                    ],
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
                    'pricedCategory' => $params->berthedCategory,
                    'berthedCategory' => $params->berthedCategory,
                ],
            ],
            'cabinInfo' => [
                'cabinDetails' => [
                    'cabinNbr' => $params->cabinNumber,
                ],
                'bedDetails' => [
                    'bedConfiguration' => 'NO',
                ],
            ],
            'travellerGroup' => array_map(function($traveller) use ($params) {
                return [
                    'passengerInfo' => [
                        'travellerId' => [
                            'lastName' => $traveller->lastName,
                            'status' => 'A',
                        ],
                        'travellerDetails' => [
                            'nameId' => $traveller->firstName,
                            'referenceNbr' => $traveller->referenceNbr,
                            'passengerTitle' => $traveller->passengerTitle,
                            'passengerGender' => $traveller->passengerGender,
                            'middleName' => $traveller->middleName,
                        ],
                    ],
                    'modeOfTransportation' => [
                        'transportationInfo' => [
                            'modeOfTransport' => $traveller->modeOfTransportCode,
                            'motCity' => $traveller->modeOfTransportCity,
                        ],
                        'motStatus' => $traveller->modeOfTransportStatus,
                    ],
                    'documentInfo' => [
                        'travellerDocumentDetails' => [
                            'documentCode' => 39,
                            'documentNbr' => $traveller->passportNumber,
                            'issuanceCountry' => $traveller->issuanceCountry,
                            'nationality' => $traveller->nationalityCountry,
                            'birthcountry' => $traveller->birthCountry,
                        ],
                        'issueDate' => [
                            'issueDate' => $traveller->passportIssueDate,
                            'expirationDate' => $traveller->passportExpirationDate,
                        ]
                    ],
                    'birthDate' => [
                        'dateTimeDescription' => [
                            'dateTimeQualifier' => 'BIR',
                            'dateTimeDetails' => $traveller->birthDate,
                        ],
                    ],
                    'addressInfo' => [
                        'addressQualifier' => [
                            'address' => 'PAX',
                        ],
                        'addressDetails' => [
                            'addressLine1' => $traveller->addressLine1,
                            'addressLine2' => $traveller->addressLine2,
                        ],
                        'cityName' => $traveller->addressCity,
                    ],
                    'fareCode' => [
                        'fareCodeId' => [
                            'cruiseFareCode' => $params->fareCode,
                        ],
                    ],
                ];
            }, $params->travellers),
        ];

        $this->diningGroup = [
            'diningDetails' => [
                'diningIdentification' => [
                    'diningLabel' => $params->diningLabel,
                    'diningStatus' => $params->diningStatus,
                ],
            ],
            'diningAssociation' => array_map(function($traveller){
                return [
                    'travellerId' => [
                        'lastName' => $traveller->referenceNbr,
                    ],
                ];
            }, $params->travellers),
        ];

        $this->insuranceGroup = [
            'insuranceInfo' => [
                'insuranceList' => array_map(function($code) {
                    return [
                        'insuranceCode' => $code,
                    ];
                }, $params->insuranceCodes),
            ],
            'insuranceAssociation' => array_map(function($traveller) {
                return [
                    'travellerId' => [
                        'lastName' => $traveller->referenceNbr,
                    ],
                ];
            }, $params->travellers),
        ];
    }

}