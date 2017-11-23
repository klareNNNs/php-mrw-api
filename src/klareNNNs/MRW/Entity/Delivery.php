<?php

namespace klareNNNs\MRW\Entity;

class Delivery
{
    private $state;
    private $message;
    private $requestNumber;
    private $shippingNumber;
    private $url;

    public function __construct(
        string $state, string $message, string $requestNumber, string $shippingNumber, string $url
    )
    {
        $this->state = $state;
        $this->message = $message;
        $this->requestNumber = $requestNumber;
        $this->shippingNumber = $shippingNumber;
        $this->url = $url;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getRequestNumber(): string
    {
        return $this->requestNumber;
    }

    public function getShippingNumber(): string
    {
        return $this->shippingNumber;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
