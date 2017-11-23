<?php

use PHPUnit\Framework\TestCase;
use klareNNNs\MRW\Client;
use klareNNNs\MRW\Entity\AuthHeader;
use klareNNNs\MRW\Entity\ServiceData;
use klareNNNs\MRW\Entity\ShippingAddress;
use klareNNNs\MRW\Entity\ShippingUser;

class ClientTest extends TestCase
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

        $apiClient = new Client($soap, $auth);

        $this->assertInstanceOf('\klareNNNs\MRW\Client', $apiClient);
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

        $apiClient = new Client($soap, $auth);


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

        $delivery = $apiClient->createTransaction($serviceData, $shippingAddress, $shippingUser);

        $this->assertInstanceOf('\klareNNNs\MRW\Client', $apiClient);
        $this->assertInstanceOf('\klareNNNs\MRW\Entity\Delivery', $delivery);
    }

    public function testApiClientCanNotLog()
    {
        $soap = new SoapClient(self::TEST_SOAP_CLIENT, array('trace' => 1, "exceptions" => 0));
        $franchise = getenv('FRANCHISE');
        $subscriber = getenv('SUBSCRIBER');
        $department = getenv('DEPARTMENT');
        $user = getenv('USER');
        $password = '';
        $auth = new AuthHeader($franchise, $subscriber, $department, $user, $password);

        $apiClient = new Client($soap, $auth);


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

        $delivery = $apiClient->createTransaction($serviceData, $shippingAddress, $shippingUser);

        $this->assertInstanceOf('\klareNNNs\MRW\Client', $apiClient);
        $this->assertInstanceOf('\klareNNNs\MRW\Entity\Delivery', $delivery);
        $this->assertTrue($delivery->getMessage() == '1) El usuario especificado no dispone de acceso al sistema, consulte con su franquicia.');
        $this->assertTrue($delivery->getState() == 0);
    }

}
