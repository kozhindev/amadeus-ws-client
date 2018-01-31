<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


class HandlerRequestCategoryAvailability extends CruiseResponseHandler
{
    /**
     * @param \DOMDocument $domDocument
     * @return bool
     */
    public function isResponseCorrect(\DOMDocument $domDocument)
    {
        return (bool) $domDocument->getElementsByTagName('categoryGroup')->length;
    }
}