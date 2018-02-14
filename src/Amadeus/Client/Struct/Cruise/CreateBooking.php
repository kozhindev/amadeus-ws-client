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
        $referenceNbr = 1;

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
            'travellerGroup' => [
                'passengerInfo' => [
                    'travellerId' => [
                        'lastName' => $params->lastName,
                        'status' => 'A',
                    ],
                    'travellerDetails' => [
                        'nameId' => $params->firstName,
                        'referenceNbr' => $referenceNbr,
                        'passengerTitle' => $params->passengerTitle,
                        'passengerGender' => $params->passengerGender,
                        'middleName' => $params->middleName,
                    ],
                ],
                'modeOfTransportation' => [
                    'transportationInfo' => [
                        'modeOfTransport' => $params->modeOfTransportCode,
                        'motCity' => $params->modeOfTransportCity,
                    ],
                    'motStatus' => $params->modeOfTransportStatus,
                ],
                'documentInfo' => [
                    'travellerDocumentDetails' => [
                        'documentCode' => 39,
                        'documentNbr' => $params->passportNumber,
                        'issuanceCountry' => $params->issuanceCountry,
                        'nationality' => $params->nationalityCountry,
                        'birthcountry' => $params->birthCountry,
                    ],
                    'issueDate' => [
                        'issueDate' => $params->passportIssueDate,
                        'expirationDate' => $params->passportExpirationDate,
                    ]
                ],
                'birthDate' => [
                    'dateTimeDescription' => [
                        'dateTimeQualifier' => 'BIR',
                        'dateTimeDetails' => $params->birthDate,
                    ],
                ],
                'addressInfo' => [
                    'addressQualifier' => [
                        'address' => 'PAX',
                    ],
                    'addressDetails' => [
                        'addressLine1' => $params->addressLine1,
                        'addressLine2' => $params->addressLine2,
                    ],
                    'cityName' => $params->addressCity,
                ],
                'fareCode' => [
                    'fareCodeId' => [
                        'cruiseFareCode' => $params->fareCode,
                    ],
                ],
            ],
        ];

        $this->diningGroup = [
            'diningDetails' => [
                'diningIdentification' => [
                    'diningLabel' => $params->diningLabel,
                    'diningStatus' => $params->diningStatus,
                ],
            ],
            'diningAssociation' => [
                'travellerId' => [
                    'lastName' => $referenceNbr,
                ],
            ],
        ];

        $this->insuranceGroup = [
            'insuranceInfo' => [
                'insuranceList' => array_map(function($code) {
                    return [
                        'insuranceCode' => $code,
                    ];
                }, $params->insuranceCodes),
            ],
            'insuranceAssociation' => [
                'travellerId' => [
                    'lastName' => $referenceNbr,
                ],
            ],
        ];
    }

}