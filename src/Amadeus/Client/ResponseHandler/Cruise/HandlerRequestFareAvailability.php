<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

class HandlerRequestFareAvailability extends CruiseResponseHandler
{
    /**
     * @param SendResult $response
     * @return Result
     */
    public function analyzeCruiseResponse(SendResult $response)
    {
        $domDoc = $this->loadDomDocument($response->responseXml);

        $sailingGroupNode = $domDoc->getElementsByTagName('fareGroup')->item(0);

        return new Result($response, is_null($sailingGroupNode) ? Result::STATUS_ERROR : Result::STATUS_OK);
    }

}