<?php

namespace klareNNNs\MRW\Entity;

class ShippingAddress
{
    private $addressCode;
    private $viaType;
    private $via;
    private $number;
    private $other;
    private $postalCode;
    private $city;
    private $countryCode;

    public function __construct(
        string $addressCode,
        string $viaType,
        string $via,
        string $number,
        string $other,
        string $postalCode,
        string $city,
        string $countryCode
    ) {
        $this->addressCode = $addressCode;
        $this->viaType = $viaType;
        $this->via = $via;
        $this->number = $number;
        $this->other = $other;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->countryCode = $countryCode;
    }

    public function getAddressCode(): string
    {
        return $this->addressCode;
    }

    public function getViaType(): string
    {
        return $this->viaType;
    }

    public function getVia(): string
    {
        return $this->via;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getOther(): string
    {
        return $this->other;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
}
