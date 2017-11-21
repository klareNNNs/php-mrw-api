<?php

namespace MRW;

use SoapHeader;
use SoapClient;

class ApiClient
{
    private $client;
    private $franchiseCode;
    private $subscriberCode;
    private $user;
    private $password;

    public function __construct(
        SoapClient $soapClient, string $franchiseCode, string $subscriberCode, string $user, string $password
    )
    {
        $this->client = $soapClient;
        $this->franchiseCode = $franchiseCode;
        $this->subscriberCode = $subscriberCode;
        $this->user = $user;
        $this->password = $password;
    }

    public function createTransaction(array $request)
    {
        $this->initSoapHeaders();

        return $this->client->TransmEnvio($request);
    }

    private function initSoapHeaders()
    {
        $namespace = 'mrw';
        $auth = [
            'CodigoFranquicia' => '02650',
            'CodigoAbonado' => '051946',
            'CodigoDepartamento' => '01',
            'UserName' => '02650SAGECHAIER',
            'Password' => '02650SAGECHAIER'
        ];
        $header = new SoapHeader($namespace, 'AuthInfo', $auth);
        $this->client->__setSoapHeaders($header);

        /*
        $this->client->he
        <soap:Header>
        <mrw:AuthInfo>
        <mrw:CodigoFranquicia>String</mrw:CodigoFranquicia>
        <mrw:CodigoAbonado>String</mrw:CodigoAbonado>
        <mrw:CodigoDepartamento>String</mrw:CodigoDepartamento>
        <mrw:UserName>String</mrw:UserName>
        <mrw:Password>String</mrw:Password>
        </mrw:AuthInfo>
        </soap:Header>
        */
    }
}
