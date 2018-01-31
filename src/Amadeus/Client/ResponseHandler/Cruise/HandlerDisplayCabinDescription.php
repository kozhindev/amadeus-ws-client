<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


class HandlerDisplayCabinDescription extends CruiseResponseHandler
{
    /**
     * @param \DOMDocument $domDocument
     * @return bool
     */
    public function isResponseCorrect(\DOMDocument $domDocument)
    {
        return (bool) $domDocument->getElementsByTagName('cabinGroup')->length;
    }
}