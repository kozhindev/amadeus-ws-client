<?php

namespace Amadeus;


use Amadeus\Client\Exception;
use Amadeus\Client\RequestOptions\Cruise\RequestSailingAvailabilityOptions;
use Amadeus\Client\RequestOptions\Cruise\RequestFareAvailabilityOptions;
use Amadeus\Client\Result;

trait CruiseServicesTrait
{
    /**
     * Cruise_RequestSailingAvailability - get sailings
     *
     * @param RequestSailingAvailabilityOptions $options
     * @param array $messageOptions (OPTIONAL)
     * @return Result
     * @throws Exception
     */
    public function requestSailingAvailability(RequestSailingAvailabilityOptions $options, $messageOptions = [])
    {
        $msgName = 'Cruise_RequestSailingAvailability';

        return $this->callMessage($msgName, $options, $messageOptions);
    }

    /**
     * Cruise_RequestFareAvailability - get sailings
     *
     * @param RequestFareAvailabilityOptions $options
     * @param array $messageOptions (OPTIONAL)
     * @return Result
     * @throws Exception
     */
    public function requestFareAvailability(RequestFareAvailabilityOptions $options, $messageOptions = [])
    {
        $msgName = 'Cruise_RequestFareAvailability';

        return $this->callMessage($msgName, $options, $messageOptions);
    }
}