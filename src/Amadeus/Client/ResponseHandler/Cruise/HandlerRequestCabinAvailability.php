<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

class HandlerRequestCabinAvailability extends CruiseResponseHandler
{
    /**
     * @param SendResult $response
     * @return Result
     */
    public function analyzeCruiseResponse(SendResult $response)
    {
        $domDoc = $this->loadDomDocument($response->responseXml);

        $ifCabinExists = !!$domDoc->getElementsByTagName('cabinGroup')->length;
        return new Result($response, $ifCabinExists ? Result::STATUS_OK : Result::STATUS_ERROR);
    }

}