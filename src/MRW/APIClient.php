<?php

namespace MRW;

use MRW\Entity\Delivery;

class ApiClient
{
    private $franchiseCode;
    private $subscriberCode;
    private $user;
    private $password;
    private $client;

    public function __construct(
        \SoapClient $soapClient,
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

    public function createTransaction(array $request): Delivery
    {

        return ;
    }
}
