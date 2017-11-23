<?php

use klareNNNs\MRW\Entity\ServiceData;
use klareNNNs\MRW\Entity\ShippingAddress;
use klareNNNs\MRW\Entity\ShippingUser;
use klareNNNs\MRW\Services\SoapRequestFactory;
use PHPUnit\Framework\TestCase;

class SoapRequestFactoryTest extends TestCase
{
    public function testSoapRequestFactoryCreateCorrectArray()
    {
        $testRequest = [
            "TransmEnvio" => [
                "request" => [
                    'DatosEntrega' => [
                        'Direccion' => [
                            'CodigoDireccion' => '',
                            'CodigoTipoVia' => '',
                            'Via' => 'Calle Ramon y Cajal',
                            'Numero' => '22',
                            'Resto' => '',
                            'CodigoPostal' => '08402',
                            'Poblacion' => 'Granollers',
                            'CodigoPais' => 'ESP',
                        ],
                        'Nif' => '',
                        'Nombre' => 'Jorge',
                        'Telefono' => '666666666',
                        'Contacto' => 'Jorge',
                        'ALaAtencionDe' => 'Jorge',
                        'Observaciones' => '',
                    ],
                    'DatosServicio' => [
                        'Fecha' => date("dd/mm/YY"),
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

        $date = date("dd/mm/YY");
        $reference = 'BWZXTFSZU';
        $onFranchise = 'N';
        $serviceCode = '0200';
        $serviceDescription = '';
        $items = '';
        $numberOfItems = '1';
        $weight = '1';
        $saturdayDelivery = 'N';
        $return = 'N';
        $refund = 'O';
        $refundAmount = '25,9';

        $serviceData = new ServiceData($date, $reference, $onFranchise, $serviceCode, $serviceDescription, $items,
            $numberOfItems, $weight, $saturdayDelivery, $return, $refund, $refundAmount);

        $addressCode = '';
        $viaType = '';
        $via = 'Calle Ramon y Cajal';
        $number = '22';
        $other = '';
        $postalCode = '08402';
        $city = 'Granollers';
        $countryCode = 'ESP';

        $shippingAddress = new ShippingAddress($addressCode, $viaType, $via, $number, $other, $postalCode, $city,
            $countryCode);

        $nif = '';
        $name = 'Jorge';
        $telephone = '666666666';
        $contact = 'Jorge';
        $atentionTo = 'Jorge';
        $observations = '';

        $shippingUser = new ShippingUser($nif, $name, $telephone, $contact, $atentionTo, $observations);

        $request = (new SoapRequestFactory())->create($serviceData, $shippingAddress, $shippingUser);

        $this->assertEquals($testRequest, $request);
    }
}
