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
     * @throws \Amadeus\Client\Exception
     */
    public function analyze(SendResult $response)
    {
        $domDoc = $this->loadDomDocument($response->responseXml);

        return new Result($response, $this->isResponseCorrect($domDoc) ? Result::STATUS_OK : Result::STATUS_ERROR);
    }

    abstract public function isResponseCorrect(\DOMDocument $domDocument);
}