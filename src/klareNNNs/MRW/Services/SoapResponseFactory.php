<?php

namespace klareNNNs\MRW\Services;

use klareNNNs\MRW\Entity\Delivery;

class SoapResponseFactory
{
    public static function create($response): Delivery
    {
        return new Delivery($response->TransmEnvioResult->Estado, $response->TransmEnvioResult->Mensaje,
            $response->TransmEnvioResult->NumeroSolicitud, $response->TransmEnvioResult->NumeroEnvio,
            $response->TransmEnvioResult->Url);
    }
}