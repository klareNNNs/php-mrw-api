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
        $franchise = '';
        $subscriber = '';
        $department = '';
        $user = '';
        $password = '';
        $auth = new AuthHeader($franchise, $subscriber, $department, $user, $password);

        $apiClient = new ApiClient($soap, $auth);

        $this->assertInstanceOf('\klareNNNs\MRW\ApiClient', $apiClient);
    }

    public function testCanQueryAgainstMRW()
    {
        $soap = new SoapClient(self::TEST_SOAP_CLIENT, array('trace' => 1, "exceptions" => 0));
        $franchise = getenv('FRANCHISE');
        $subscriber = getenv('SUBSCRIBER');
        $department = getenv('DEPARTMENT');
        $user = getenv('USER');
        $password = getenv('PASSWORD');
        $auth = new AuthHeader($franchise, $subscriber, $department, $user, $password);

        $apiClient = new ApiClient($soap, $auth);
        $this->assertInstanceOf('\klareNNNs\MRW\ApiClient', $apiClient);
    }
}
