<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


use Amadeus\Client\ResponseHandler\StandardResponseHandler;
use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

class HandlerRequestFareAvailability extends StandardResponseHandler
{
    /**
     * @param SendResult $response
     * @return Result
     */
    public function analyze(SendResult $response)
    {
        $domDoc = $this->loadDomDocument($response->responseXml);

        // @todo change to proper error detecting
        $sailingGroupNode = $domDoc->getElementsByTagName('fareGroup')->item(0);

        return new Result($response, is_null($sailingGroupNode) ? Result::STATUS_ERROR : Result::STATUS_OK);
    }

}