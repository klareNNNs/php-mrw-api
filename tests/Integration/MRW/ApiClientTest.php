<?php

use PHPUnit\Framework\TestCase;
use klareNNNs\MRW\ApiClient;
use klareNNNs\MRW\Entity\AuthHeader;

class IntegrationApiClientTest extends TestCase
{
    const TEST_SOAP_CLIENT = 'http://sagec-test.mrw.es/MRWEnvio.asmx?WSDL';

    public function testCanConstructApiClient()
    {
        $soap = new SoapClient(self::TEST_SOAP_CLIENT, array('trace' => 1, "exceptions" => 0));
        $franchiseCode = '';
        $subscriberCode = '';
        $user = '';
        $password = '';

        $apiClient = new ApiClient($soap, $franchiseCode, $subscriberCode, $user, $password);

        $this->assertInstanceOf('\klareNNNs\MRW\ApiClient', $apiClient);
    }

    public function testCanQueryAgainstMRW()
    {
        $soap = new SoapClient(self::TEST_SOAP_CLIENT, array('trace' => 1, "exceptions" => 0));
        $franchiseCode = getenv('FRANCHISE_CODE');
        $subscriberCode = getenv('SUBSCRIBER_CODE');
        $user = getenv('USER');
        $password = getenv('PASSWORD');

        $authHeader = new AuthHeader($franchiseCode, $subscriberCode, '', $user, $password);

        $apiClient = new ApiClient($soap, $authHeader);

        $request = [
            "TransmEnvio" => [
                "request" => [
                    'DatosEntrega' => [
                        'Direccion' => [
                            'CodigoDireccion' => '',
                            'CodigoTipoVia' => 'AVENIDA',
                            'Via' => 'Doctor Pasteur',
                            'Numero' => '6',
                            'Resto' => '',
                            'CodigoPostal' => '08830',
                            'Poblacion' => 'Sant Boi de Llobregat',
                            'CodigoPais' => 'ESP',
                        ],
                        'Nif' => '',
                        'Nombre' => 'Jordi',
                        'Telefono' => '666666666',
                        'Contacto' => 'Jordi',
                        'ALaAtencionDe' => 'Jordi',
                        'Observaciones' => '',
                    ],
                    'DatosServicio' => [
                        'Fecha' => '23/11/2017',
                        'Referencia' => 'BWZXTFSZU',
                        'EnFranquicia' => 'N',
                        'CodigoServicio' => '0200',
                        'DescripcionServicio' => '',
                        'Bultos' => '',
                        'NumeroBultos' => '1',
                        'Peso' => '1',
                        'EntregaSabado' => 'N',
                        'Retorno' => 'N',
                        'Reembolso' => 'O',
                        'ImporteReembolso' => '25,9',
                    ]
                ]
            ]
        ];

        $response = $apiClient->createTransaction($request);
        $this->assertInstanceOf('klareNNNs\MRW\Entity\Delivery', $response);

//        echo "========= ESTADO =========" . PHP_EOL;
//        var_dump($response->TransmEnvioResult->Estado);
//
////        $namespace = 'http://www.mrw.es/';
////        $auth = [
////            'CodigoFranquicia' => $franchiseCode,
////            'CodigoAbonado' => $subscriberCode,
////            'CodigoDepartamento' => '',
////            'UserName' => $user,
////            'Password' => $password
////        ];
////        $AuthHeader = new \MRW\Entity\AuthHeader($auth);
////        $header = new SoapHeader($namespace, 'AuthInfo', $AuthHeader);
////        $soap->__setSoapHeaders(array($header));
////
////        $response = $soap->__soapCall('TransmEnvio',$request);
//////        $response = $soap->TransmEnvio($request);
////        echo "====== REQUEST HEADERS =====" . PHP_EOL;
////        var_dump($soap->__getLastRequestHeaders());
////        echo "========= REQUEST ==========" . PHP_EOL;
////        var_dump($soap->__getLastRequest());
        echo "========= RESPONSE =========" . PHP_EOL;
        var_dump($response);
    }


}
