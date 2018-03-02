<?php

namespace Amadeus\Client\RequestOptions\Cruise;


use Amadeus\Client\RequestOptions\CruiseBaseOptions;

class CreateBookingOptions extends CruiseBaseOptions
{
    public $cruiseLineCode;
    public $date;
    public $shipCode;
    public $duration;
    public $numberOfUnits;
    public $currencyQualifier;
    public $currencyIsoCode;
    public $arrivalPortCode;
    public $departurePortCode;

    public $modeOfTransportCode;
    public $modeOfTransportCity;
    public $modeOfTransportStatus;

    public $fareCode;
    public $pricedCategory;
    public $berthedCategory;
    public $cabinNumber;

    public $phoneNumber;
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
    public $insuranceCodes = [];

    public $diningLabel;
    public $diningStatus;
}