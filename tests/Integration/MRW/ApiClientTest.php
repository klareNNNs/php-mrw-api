<?php

use PHPUnit\Framework\TestCase;
use MRW\ApiClient;

class IntegrationApiClientTest extends TestCase
{
    const TEST_SOAP_CLIENT = 'http://sagec-test.mrw.es/MRWEnvio.asmx?WSDL';

    public function testCanConstructApiClient()
    {
        $soap = new SoapClient(self::TEST_SOAP_CLIENT);
        $franchiseCode = '';
        $subscriberCode = '';
        $user = '';
        $password = '';

        $apiClient = new ApiClient($soap, $franchiseCode, $subscriberCode, $user, $password);

        $this->assertInstanceOf('MRW\ApiClient', $apiClient);
    }

    public function testCanQueryAgainstMRW()
    {
        $soap = new SoapClient(self::TEST_SOAP_CLIENT);
        $franchiseCode = '00620';
        $subscriberCode = '017017';
        $user = 'SG00620LATOSTADORA';
        $password = 'SG00620LATOSTADORA';

        $apiClient = new ApiClient($soap, $franchiseCode, $subscriberCode, $user, $password);

        $request = [
            'DatosEntrega' => [
                'Direccion' => [
                    'CodigoTipoVia' => 'AVENIDA',
                    'Via' => 'Doctor Pasteur',
                    'Numero' => '6',
                    'Resto' => '2, 2',
                    'CodigoPostal' => '08700',
                    'Poblacion' => 'IGUALADA',
                ],
                'Nif' => '47101488h',
                'Nombre' => 'Jordi',
                'Telefono' => '600066666',
                'Contacto' => 'Jordi',
                'ALaAtencionDe' => 'Jordi',
                'Horario' => [
                    'Desde' => '10:00',
                    'Hasta' => '17:00',
                ],
                'Observaciones' => '',
            ],
            'DatosServicio' => [
                'Fecha' => '12/12/2017',
                'Referencia' => '16578',
                'EnFranquicia' => 'N',
                'CodigoServicio' => '0800',
                'Bultos' => [
                    'Dimension' => '20cms',
                    'Referencia' => 'PAY-5678',
                    'Peso' => '1',
                ],
                'EntregaSabado' => 'S',
                'ValorDeclarado' => '25',
            ]
        ];

        var_dump($apiClient->createTransaction($request));
    }


}
