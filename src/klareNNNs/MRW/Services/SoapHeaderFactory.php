<?php

namespace klareNNNs\MRW\Services;

use klareNNNs\MRW\Entity\AuthHeader;
use SoapHeader;

class SoapHeaderFactory
{
    const NAMESPACE = 'http://www.mrw.es/';

    public static function create(AuthHeader $authHeader)
    {
        $soapHeader = new SoapHeader(self::NAMESPACE, 'AuthInfo', $authHeader);

        return $soapHeader;
    }
}
