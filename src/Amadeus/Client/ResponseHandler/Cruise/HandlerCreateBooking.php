<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


class HandlerCreateBooking extends CruiseResponseHandler
{
    /**
     * @param \DOMDocument $domDocument
     * @return bool
     */
    public function isResponseCorrect(\DOMDocument $domDocument)
    {
        return (bool) $domDocument->getElementsByTagName('pnrRecordLocator')->length;
    }
}