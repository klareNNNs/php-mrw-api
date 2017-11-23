<?php

namespace klareNNNs\MRW\Entity;

class ShippingUser
{
    private $nif;
    private $nombre;
    private $telefono;
    private $contacto;
    private $aLaAtencionDe;
    private $observaciones;

    public function __construct(
        string $nif,
        string $nombre,
        string $telefono,
        string $contacto,
        string $aLaAtencionDe,
        string $observaciones
    ) {
        $this->nif = $nif;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->contacto = $contacto;
        $this->aLaAtencionDe = $aLaAtencionDe;
        $this->observaciones = $observaciones;
    }

    public function getNif(): string
    {
        return $this->nif;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getTelefono(): string
    {
        return $this->telefono;
    }

    public function getContacto(): string
    {
        return $this->contacto;
    }

    public function getALaAtencionDe(): string
    {
        return $this->aLaAtencionDe;
    }

    public function getObservaciones(): string
    {
        return $this->observaciones;
    }


}