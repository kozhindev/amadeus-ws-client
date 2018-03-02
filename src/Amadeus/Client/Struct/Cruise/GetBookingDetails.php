<?php

namespace Amadeus\Client\Struct\Cruise;

use Amadeus\Client\RequestOptions\Cruise\GetBookingDetailsOptions;

class GetBookingDetails extends BaseCruiseMessage
{
    public $bookingReference;

    /**
     * Authenticate constructor.
     *
     * @param GetBookingDetailsOptions $params
     */
    public function __construct(GetBookingDetailsOptions $params)
    {
        parent::__construct($params);

        $this->bookingReference = [
            'referenceType' => $params->referenceType,
            'uniqueReference' => $params->uniqueReference,
        ];
    }

}