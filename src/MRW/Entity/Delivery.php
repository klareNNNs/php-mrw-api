<?php

namespace MRW\Entity;

class Delivery
{

    private $estado;
    private $mensaje;
    private $numeroSolicitud;
    private $numeroEnvio;
    private $url;

    public function __construct(string $estado,string $mensaje,string $numeroSolicitud,string $numeroEnvio,string $url)
    {
        $this->estado = $estado;
        $this->mensaje = $mensaje;
        $this->numeroSolicitud = $numeroSolicitud;
        $this->numeroEnvio = $numeroEnvio;
        $this->url = $url;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function getMensaje(): string
    {
        return $this->mensaje;
    }

    public function getNumeroSolicitud(): string
    {
        return $this->numeroSolicitud;
    }

    public function getNumeroEnvio(): string
    {
        return $this->numeroEnvio;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getTicketUrl(): string
    {
        $franquicia = substr($this->getNumeroSolicitud(),0,5);
        $abonado = substr($this->getNumeroSolicitud(),5,6);
        $ticketUrl = $this->getUrl().'?Franq='.$franquicia.'&Ab='.$abonado.'&Dep=&Pwd=password&Usr=user&NumEnv='.$this->getNumeroEnvio();

        return $ticketUrl;
    }

}
