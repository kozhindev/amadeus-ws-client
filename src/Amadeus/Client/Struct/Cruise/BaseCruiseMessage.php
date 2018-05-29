<?php

namespace Amadeus\Client\Struct\Cruise;

use Amadeus\Client\RequestOptions\CruiseBaseOptions;
use Amadeus\Client\Struct\BaseWsMessage;

class BaseCruiseMessage extends BaseWsMessage
{
    public $agentEnvironment;
    public const CHILD_AGE = 10;
    public const GROWN_AGE = 35;

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