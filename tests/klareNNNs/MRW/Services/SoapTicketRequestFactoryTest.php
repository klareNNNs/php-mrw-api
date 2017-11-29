<?php

use PHPUnit\Framework\TestCase;

class SoapTicketRequestFactoryTest extends TestCase
{
    public function testCanCreateCorrectRequestArray()
    {
        $orderId = '002334343';
        $requestTest = [
            'GetEtiquetaEnvio' => [
                'request' => [
                    'NumeroEnvio' => $orderId,
                    'SeparadorNumerosEnvio' => '',
                    'TipoEtiquetaEnvio' => '0',
                    'ReportTopMargin' => 1100,
                    'ReportLeftMargin' => 650,
                ]
            ]
        ];

        $request = (new \klareNNNs\MRW\Services\SoapTicketRequestFactory())->create($orderId);

        $this->assertEquals($requestTest,$request);
    }

}
