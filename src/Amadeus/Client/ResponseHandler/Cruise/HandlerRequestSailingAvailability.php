<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

class HandlerRequestSailingAvailability extends CruiseResponseHandler
{
    /**
     * @param \DOMDocument $domDocument
     * @return bool
     */
    public function isResponseCorrect(\DOMDocument $domDocument)
    {
        return (bool) $domDocument->getElementsByTagName('sailingGroup')->length;
    }
}