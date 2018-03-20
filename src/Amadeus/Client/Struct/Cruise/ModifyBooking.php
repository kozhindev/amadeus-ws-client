<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\ModifyBookingOptions;

class ModifyBooking extends CreateBooking
{
    public $bookingReference;
    public $deletedGuestList;

    /**
     * Authenticate constructor.
     *
     * @param ModifyBookingOptions $params
     */
    public function __construct(ModifyBookingOptions $params)
    {
        parent::__construct($params);

        $this->bookingReference = [
            'referenceType' => $params->referenceType,
            'uniqueReference' => $params->uniqueReference,
        ];

        $this->deletedGuestList = array_map(function($referenceNumber) {
            return [
                'travellerId' => [
                    'lastName' => $referenceNumber,
                    'status' => 'D',
                ],
            ];
        }, $params->deletedGuestsReferenceNumber);

        $this->bookingQualifier = [
            $this->bookingQualifier,
            [
                'partyQualifier' => 1,
                'itemDescription' => [
                    'value' => $params->bookingQualifierValue,
                    'status' => $params->bookingQualifierStatus,
                ],
            ]
        ];
    }

}