<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


use Amadeus\Client\ResponseHandler\StandardResponseHandler;
use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

abstract class CruiseResponseHandler extends StandardResponseHandler
{
    /**
     * @todo place here common error detection of the cruise services
     *
     * @param SendResult $response
     * @return Result
     */
    public function analyze(SendResult $response)
    {
        return $this->analyzeCruiseResponse($response);
    }

    abstract public function analyzeCruiseResponse(SendResult $response);
}