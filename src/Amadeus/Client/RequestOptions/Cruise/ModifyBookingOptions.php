<?php

namespace Amadeus\Client\RequestOptions\Cruise;

class ModifyBookingOptions extends CreateBookingOptions
{
    /**
     * Amadeus Record Locator for PNR
     * @var string
     */
    public $recordLocator;

    /**
     * @var integer[]
     */
    public $deletedGuestsReferenceNumber = [];

    public $referenceType;
    public $uniqueReference;
}