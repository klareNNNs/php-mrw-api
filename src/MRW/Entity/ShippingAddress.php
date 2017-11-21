<?php

namespace MRW\Entity;

class ShippingAddress
{
    private $CodigoDireccion;
    private $CodigoTipoVia;
    private $Via;
    private $Numero;
    private $Resto;
    private $CodigoPostal;
    private $Poblacion;
    private $Provincia;
    private $Estado;
    private $CodigoPais;
    private $TipoPuntoEntrega;
    private $CodigoPuntoEntrega;
    private $CodigoFranquiciaAsociadaPuntoEntrega;
    private $TipoPuntoRecogida;
    private $CodigoPuntoRecogida;
    private $CodigoFranquiciaAsociadaPuntoRecogida;
    private $Agencia;

    public function __construct(
        string $CodigoDireccion,
        string $CodigoTipoVia,
        string $Via,
        string $Numero,
        string $Resto,
        string $CodigoPostal,
        string $Poblacion,
        string $Provincia,
        string $Estado,
        string $CodigoPais,
        string $TipoPuntoEntrega,
        string $CodigoPuntoEntrega,
        string $CodigoFranquiciaAsociadaPuntoEntrega,
        string $TipoPuntoRecogida,
        string $CodigoPuntoRecogida,
        string $CodigoFranquiciaAsociadaPuntoRecogida,
        string $Agencia
    ) {
        $this->CodigoDireccion = $CodigoDireccion;
        $this->CodigoTipoVia = $CodigoTipoVia;
        $this->Via = $Via;
        $this->Numero = $Numero;
        $this->Resto = $Resto;
        $this->CodigoPostal = $CodigoPostal;
        $this->Poblacion = $Poblacion;
        $this->Provincia = $Provincia;
        $this->Estado = $Estado;
        $this->CodigoPais = $CodigoPais;
        $this->TipoPuntoEntrega = $TipoPuntoEntrega;
        $this->CodigoPuntoEntrega = $CodigoPuntoEntrega;
        $this->CodigoFranquiciaAsociadaPuntoEntrega = $CodigoFranquiciaAsociadaPuntoEntrega;
        $this->TipoPuntoRecogida = $TipoPuntoRecogida;
        $this->CodigoPuntoRecogida = $CodigoPuntoRecogida;
        $this->CodigoFranquiciaAsociadaPuntoRecogida = $CodigoFranquiciaAsociadaPuntoRecogida;
        $this->Agencia = $Agencia;
    }

    public function getCodigoDireccion(): string
    {
        return $this->CodigoDireccion;
    }

    public function getCodigoTipoVia(): string
    {
        return $this->CodigoTipoVia;
    }

    public function getVia(): string
    {
        return $this->Via;
    }

    public function getNumero(): string
    {
        return $this->Numero;
    }

    public function getResto(): string
    {
        return $this->Resto;
    }

    public function getCodigoPostal(): string
    {
        return $this->CodigoPostal;
    }

    public function getPoblacion(): string
    {
        return $this->Poblacion;
    }

    public function getProvincia(): string
    {
        return $this->Provincia;
    }

    public function getEstado(): string
    {
        return $this->Estado;
    }

    public function getCodigoPais(): string
    {
        return $this->CodigoPais;
    }

    public function getTipoPuntoEntrega(): string
    {
        return $this->TipoPuntoEntrega;
    }

    public function getCodigoPuntoEntrega(): string
    {
        return $this->CodigoPuntoEntrega;
    }

    public function getCodigoFranquiciaAsociadaPuntoEntrega(): string
    {
        return $this->CodigoFranquiciaAsociadaPuntoEntrega;
    }

    public function getTipoPuntoRecogida(): string
    {
        return $this->TipoPuntoRecogida;
    }

    public function getCodigoPuntoRecogida(): string
    {
        return $this->CodigoPuntoRecogida;
    }

    public function getCodigoFranquiciaAsociadaPuntoRecogida(): string
    {
        return $this->CodigoFranquiciaAsociadaPuntoRecogida;
    }

    public function getAgencia(): string
    {
        return $this->Agencia;
    }
}
