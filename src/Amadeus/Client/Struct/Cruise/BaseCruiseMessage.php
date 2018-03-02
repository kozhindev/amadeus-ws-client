<?php

namespace Amadeus\Client\Struct\Cruise;

use Amadeus\Client\RequestOptions\CruiseBaseOptions;
use Amadeus\Client\Struct\BaseWsMessage;

class BaseCruiseMessage extends BaseWsMessage
{
    public $agentEnvironment;


    /**
     * @param CruiseBaseOptions $params
     */
    public function __construct(CruiseBaseOptions $params)
    {
        $this->agentEnvironment = [
            'agentTerminalId' => $params->agentTerminalId,
        ];
    }

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