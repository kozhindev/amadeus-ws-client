<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


class HandlerDisplayItineraryDescription extends CruiseResponseHandler
{
    /**
     * @param \DOMDocument $domDocument
     * @return bool
     */
    public function isResponseCorrect(\DOMDocument $domDocument)
    {
        return (bool) $domDocument->getElementsByTagName('locationGroup')->length;
    }
}