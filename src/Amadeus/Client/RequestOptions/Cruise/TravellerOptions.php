<?php

namespace Amadeus\Client\RequestOptions\Cruise;

use Amadeus\Client\RequestOptions\Base;

class TravellerOptions extends Base
{
    public $firstName;
    public $lastName;
    public $middleName;
    public $addressCity;
    public $addressLine1;
    public $addressLine2;
    public $issuanceCountry;
    public $nationalityCountry;
    public $birthDate;
    public $birthCountry;
    public $passportNumber;
    public $passportIssueDate;
    public $passportExpirationDate;
    public $passengerGender;
    public $passengerTitle;
    public $referenceNbr;

    public $modeOfTransportCode;
    public $modeOfTransportCity;
    public $modeOfTransportStatus;
}