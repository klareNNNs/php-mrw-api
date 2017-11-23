<?php

namespace klareNNNs\MRW\Services;

use klareNNNs\MRW\Entity\AuthHeader;
use SoapHeader;

class SoapHeaderFactory
{
    public static function create(AuthHeader $authHeader)
    {
        $namespace = 'http://www.mrw.es/';

        return new SoapHeader($namespace, 'AuthInfo', $authHeader);
    }
}
