<?php

namespace klareNNNs\MRW;

use klareNNNs\MRW\Entity\AuthHeader;
use klareNNNs\MRW\Entity\Delivery;
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
        SoapClient $soapClient,
        string $franchiseCode,
        string $subscriberCode,
        string $user,
        string $password
    ) {
        $this->client = $soapClient;
        $this->franchiseCode = $franchiseCode;
        $this->subscriberCode = $subscriberCode;
        $this->user = $user;
        $this->password = $password;
    }

    public function createTransaction(array $request)
    {
        try {
            $this->initSoapHeaders();

            $response = $this->client->__soapCall('TransmEnvio', $request);

            return new Delivery($response->TransmEnvioResult->Estado, $response->TransmEnvioResult->Mensaje,
                $response->TransmEnvioResult->NumeroSolicitud, $response->TransmEnvioResult->NumeroEnvio,
                $response->TransmEnvioResult->Url);

        } catch (\SoapFault $e) {
            throw new \Exception();
        }
    }

    private function initSoapHeaders()
    {
        try {
            $namespace = 'http://www.mrw.es/';
            $auth = [
                'CodigoFranquicia' => $this->franchiseCode,
                'CodigoAbonado' => $this->subscriberCode,
                'CodigoDepartamento' => '',
                'UserName' => $this->user,
                'Password' => $this->password
            ];

            $AuthHeader = new AuthHeader($auth);
            $header = new SoapHeader($namespace, 'AuthInfo', $AuthHeader);
            $this->client->__setSoapHeaders(array($header));

        } catch (\Exception $e) {
            throw new \Exception;
        }
    }
}
