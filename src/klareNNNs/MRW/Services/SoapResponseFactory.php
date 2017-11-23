<?php

namespace klareNNNs\MRW\Services;

use UnexpectedValueException;
use klareNNNs\MRW\Entity\Delivery;

class SoapResponseFactory
{
    public static function create($response)
    {
        if (!static::validateFields($response)) {
            throw new UnexpectedValueException('The Response has unexpected Values');
        }
        $result = $response->TransmEnvioResult;

        return new Delivery(
            $result->Estado,
            $result->Mensaje,
            $result->NumeroSolicitud,
            $result->NumeroEnvio,
            $result->Url
        );
    }

    private static function validateFields($response): bool
    {
        if (!isset($response->TransmEnvioResult)) {
            return false;
        }

        $result = $response->TransmEnvioResult;
        if (!isset($result->Estado)) {
            return false;
        }
        if (!isset($result->Mensaje)) {
            return false;
        }
        if (!isset($result->NumeroSolicitud)) {
            return false;
        }
        if (!isset($result->NumeroEnvio)) {
            return false;
        }
        if (!isset($result->Url)) {
            return false;
        }

        return true;
    }
}