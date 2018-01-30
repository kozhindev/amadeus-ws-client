<?php

namespace Amadeus\Client\Struct\Cruise;

use Amadeus\Client\Struct\BaseWsMessage;

class BaseCruiseMessage extends BaseWsMessage
{
    public static function getProcessingInfo()
    {
        return [
            'processingDetails' => [
                'businessType' => 5,
                'function' => 56,
            ],
        ];
    }

}