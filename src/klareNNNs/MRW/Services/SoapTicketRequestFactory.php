<?php

namespace klareNNNs\MRW\Services;

class SoapTicketRequestFactory
{
    public static function create(string $orderId): array
    {
        return [
            'GetEtiquetaEnvio' => [
                'request' => [
                    'NumeroEnvio' => $orderId,
                    'SeparadorNumerosEnvio' => '',
                    'TipoEtiquetaEnvio' => '0',
                    'ReportTopMargin' => 1100,
                    'ReportLeftMargin' => 650,
                ]
            ]
        ];
    }
}