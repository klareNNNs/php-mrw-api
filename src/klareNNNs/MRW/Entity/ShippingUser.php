<?php

namespace klareNNNs\MRW\Entity;

class ShippingUser
{
    private $nif;
    private $name;
    private $telephone;
    private $contact;
    private $atentionTo;
    private $observations;

    public function __construct(
        string $nif,
        string $name,
        string $telephone,
        string $contact,
        string $atentionTo,
        string $observations
    ) {
        $this->nif = $nif;
        $this->name = $name;
        $this->telephone = $telephone;
        $this->contact = $contact;
        $this->atentionTo = $atentionTo;
        $this->observations = $observations;
    }

    public function getNif(): string
    {
        return $this->nif;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function getContact(): string
    {
        return $this->contact;
    }

    public function getAtentionTo(): string
    {
        return $this->atentionTo;
    }

    public function getObservations(): string
    {
        return $this->observations;
    }
}