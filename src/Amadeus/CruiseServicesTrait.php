<?php

namespace Amadeus;


use Amadeus\Client\Exception;
use Amadeus\Client\RequestOptions\Cruise\DisplayItineraryDescriptionOptions;
use Amadeus\Client\RequestOptions\Cruise\RequestCategoryAvailabilityOptions;
use Amadeus\Client\RequestOptions\Cruise\RequestSailingAvailabilityOptions;
use Amadeus\Client\RequestOptions\Cruise\RequestFareAvailabilityOptions;
use Amadeus\Client\Result;

trait CruiseServicesTrait
{
    /**
     * Cruise_RequestSailingAvailability - get sailings
     *
     * @param RequestSailingAvailabilityOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function requestSailingAvailability(RequestSailingAvailabilityOptions $options, $messageOptions = [])
    {
        $msgName = 'Cruise_RequestSailingAvailability';

        return $this->callMessage($msgName, $options, $messageOptions);
    }

    /**
     * Cruise_RequestFareAvailability - get sailing fares
     *
     * @param RequestFareAvailabilityOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function requestFareAvailability(RequestFareAvailabilityOptions $options, $messageOptions = [])
    {
        $msgName = 'Cruise_RequestFareAvailability';

        return $this->callMessage($msgName, $options, $messageOptions);
    }

    /**
     * Cruise_RequestCategoryAvailability - get fare categories
     *
     * @param RequestCategoryAvailabilityOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function requestCategoryAvailability(RequestCategoryAvailabilityOptions $options, $messageOptions = [])
    {
        $msgName = 'Cruise_RequestCategoryAvailability';

        return $this->callMessage($msgName, $options, $messageOptions);
    }

    /**
     * Cruise_DisplayItineraryDescription - get sailing details
     *
     * @param DisplayItineraryDescriptionOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function displayItineraryDescription(DisplayItineraryDescriptionOptions $options, $messageOptions = [])
    {
        $msgName = 'Cruise_DisplayItineraryDescription';

        return $this->callMessage($msgName, $options, $messageOptions);
    }
}