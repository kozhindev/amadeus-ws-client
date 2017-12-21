<?php

namespace Amadeus;


use Amadeus\Client\Exception;
use Amadeus\Client\RequestOptions\RequestSailingAvailabilityOptions;
use Amadeus\Client\Result;

trait CruiseServicesTrait
{
    /**
     * PNR_Retrieve - Retrieve an Amadeus PNR by record locator
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

}