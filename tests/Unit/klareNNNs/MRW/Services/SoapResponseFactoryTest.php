<?php

use PHPUnit\Framework\TestCase;
use klareNNNs\MRW\Services\SoapResponseFactory;

class SoapResponseFactoryTest extends TestCase
{
    public function testSoapResponseCreatesDelivery()
    {
        $response = new class()
        {
            public $TransmEnvioResult;
        };

        $result = new class()
        {
            public $Estado = '';
            public $Mensaje = '';
            public $NumeroSolicitud = '';
            public $NumeroEnvio = '';
            public $Url = '';
        };
        $response->TransmEnvioResult = $result;

        $obj = SoapResponseFactory::create($response);

        $this->assertInstanceOf('klareNNNs\MRW\Entity\Delivery', $obj);
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testSoapValidatorCheckUrl()
    {
        $response = new class()
        {
            public $TransmEnvioResult;
        };

        $result = new class()
        {
            public $Estado = '';
            public $Mensaje = '';
            public $NumeroSolicitud = '';
            public $NumeroEnvio = '';
        };
        $response->TransmEnvioResult = $result;

        SoapResponseFactory::create($response);
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testSoapValidatorCheckNumeroEnvio()
    {
        $response = new class()
        {
            public $TransmEnvioResult;
        };

        $result = new class()
        {
            public $Estado = '';
            public $Mensaje = '';
            public $NumeroSolicitud = '';
        };
        $response->TransmEnvioResult = $result;

        SoapResponseFactory::create($response);
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testSoapValidatorCheckSolicitud()
    {
        $response = new class()
        {
            public $TransmEnvioResult;
        };

        $result = new class()
        {
            public $Estado = '';
            public $Mensaje = '';
        };
        $response->TransmEnvioResult = $result;

        SoapResponseFactory::create($response);
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testSoapValidatorCheckMensaje()
    {
        $response = new class()
        {
            public $TransmEnvioResult;
        };

        $result = new class()
        {
            public $Estado = '';
        };
        $response->TransmEnvioResult = $result;

        SoapResponseFactory::create($response);
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testSoapValidatorCheckEstado()
    {
        $response = new class()
        {
            public $TransmEnvioResult;
        };

        $result = new class()
        {
        };
        $response->TransmEnvioResult = $result;

        SoapResponseFactory::create($response);
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testSoapValidatorCheckTransmision()
    {
        $response = new class()
        {
        };
        SoapResponseFactory::create($response);
    }
}
