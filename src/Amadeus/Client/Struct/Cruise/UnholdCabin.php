<?php

namespace Amadeus\Client\Struct\Cruise;


use Amadeus\Client\RequestOptions\Cruise\UnholdCabinOptions;

class UnholdCabin extends BaseCruiseMessage
{
    public $processingInfo;

    public $sailingGroup;

    /**
     * Authenticate constructor.
     *
     * @param UnholdCabinOptions $params
     */
    public function __construct(UnholdCabinOptions $params)
    {
        parent::__construct($params);

        $this->processingInfo = [
            'processingDetails' => [
                'businessType' => 5,
            ],
        ];

        $this->sailingGroup = [
            'sailingDescription' => [
                'providerDetails' => [
                    'shipCode' => $params->shipCode,
                    'cruiselineCode' => $params->cruiseLineCode,
                ],
                'sailingDateTime' => [
                    'packageStartDate' => $params->date,
                    'packageDuration' => $params->duration,
                ],
            ],
            'cabinInfo' => [
                'cabinDetails' => [
                    'cabinNbr' => $params->cabinNumber,
                ],
            ],
        ];
    }

}