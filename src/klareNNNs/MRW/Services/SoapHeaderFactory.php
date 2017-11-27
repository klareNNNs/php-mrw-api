<?php

namespace klareNNNs\MRW\Services;

use klareNNNs\MRW\Entity\AuthHeader;
use SoapHeader;

class SoapHeaderFactory
{
    const NAMESPACE = 'http://www.mrw.es/';

    public static function create(AuthHeader $authHeader)
    {
        $auth = [
            'CodigoFranquicia' => $authHeader->franchiseCode,
            'CodigoAbonado' => $authHeader->subscriberCode,
            'CodigoDepartamento' => $authHeader->departmentCode,
            'UserName' => $authHeader->userName,
            'Password' => $authHeader->password,
        ];
        $soapHeader = new SoapHeader(self::NAMESPACE, 'AuthInfo', $auth);

        return $soapHeader;
    }
}
