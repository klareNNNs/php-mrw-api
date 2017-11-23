<?php

namespace klareNNNs\MRW;

use klareNNNs\MRW\Entity\AuthHeader;
use klareNNNs\MRW\Entity\Delivery;
use klareNNNs\MRW\Entity\ServiceData;
use klareNNNs\MRW\Entity\ShippingAddress;
use klareNNNs\MRW\Entity\ShippingUser;
use klareNNNs\MRW\Services\SoapHeaderFactory;
use klareNNNs\MRW\Services\SoapRequestFactory;
use klareNNNs\MRW\Services\SoapResponseFactory;
use SoapClient;

class ApiClient
{
    const TRANSACTION_METHOD = 'TransmEnvio';
    private $client;
    private $authHeader;

    public function __construct(SoapClient $soapClient, AuthHeader $authHeader)
    {
        $this->client = $soapClient;
        $this->authHeader = $authHeader;
    }

    public function createTransaction(
        ServiceData $serviceData,
        ShippingAddress $shippingAddress,
        ShippingUser $shippingUser
    ): Delivery
    {
        try {

            $this->client->__setSoapHeaders(array(SoapHeaderFactory::create($this->authHeader)));
            $request = SoapRequestFactory::create($serviceData, $shippingAddress, $shippingUser);
            $response = $this->client->__soapCall(self::TRANSACTION_METHOD, $request);

            return SoapResponseFactory::create($response);

        } catch (\SoapFault $e) {
            throw new \Exception();
        }
    }

}
