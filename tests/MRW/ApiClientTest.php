<?php

namespace MRW;

class ApiClientTest extends \PHPUnit_Framework_TestCase
{
    CONST FRANCHISECODE = '';
    CONST SUBSCRIBERCODE = '';
    CONST USER = '';
    CONST PASSWORD = '';
    CONST URL = 'https://sagec-test.mrw.es/MRWEnvio.asmx?WSDL';

    /** @var  ApiClient */
    private $client;

    public function setUp()
    {
        $this->client = new ApiClient(new \SoapClient(self::URL),
            self::FRANCHISECODE, self::SUBSCRIBERCODE, self::USER, self::PASSWORD);
    }
}
