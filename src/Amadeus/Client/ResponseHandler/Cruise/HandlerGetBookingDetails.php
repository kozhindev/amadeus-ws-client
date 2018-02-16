<?php

namespace Amadeus\Client\ResponseHandler\Cruise;

class HandlerGetBookingDetails extends CruiseResponseHandler
{
    /**
     * @param \DOMDocument $domDocument
     * @return bool
     */
    public function isResponseCorrect(\DOMDocument $domDocument)
    {
        return (bool) $domDocument->getElementsByTagName('cabinInfo')->length;
    }
}