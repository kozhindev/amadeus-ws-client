<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

class HandlerDisplayCabinDescription extends CruiseResponseHandler
{
    /**
     * @param SendResult $response
     * @return Result
     */
    public function analyzeCruiseResponse(SendResult $response)
    {
        $domDoc = $this->loadDomDocument($response->responseXml);

        // Considering response correct if there are at least one 'locationGroup' node in the response
        $ifLocationsExist = $domDoc->getElementsByTagName('cabinGroup')->length;

        return new Result($response, $ifLocationsExist ? Result::STATUS_OK : Result::STATUS_ERROR);
    }

}