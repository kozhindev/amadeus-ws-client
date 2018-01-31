<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


class HandlerPriceBooking extends CruiseResponseHandler
{
    /**
     * @param \DOMDocument $domDocument
     * @return bool
     */
    public function isResponseCorrect(\DOMDocument $domDocument)
    {
        return (bool) $domDocument->getElementsByTagName('pricingGroup')->length;
    }
}