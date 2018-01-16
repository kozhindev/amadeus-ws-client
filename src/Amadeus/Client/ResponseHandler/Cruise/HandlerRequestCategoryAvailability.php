<?php

namespace Amadeus\Client\ResponseHandler\Cruise;


use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

class HandlerRequestCategoryAvailability extends CruiseResponseHandler
{
    /**
     * @param SendResult $response
     * @return Result
     */
    public function analyzeCruiseResponse(SendResult $response)
    {
        $domDoc = $this->loadDomDocument($response->responseXml);

        $ifCategoryExists = !!$domDoc->getElementsByTagName('categoryGroup')->length;

        return new Result($response, $ifCategoryExists ? Result::STATUS_OK : Result::STATUS_ERROR);
    }

}