<?php

namespace klareNNNs\MRW\Entity;

class AuthHeader
{
    var $franchiseCode;
    var $subscriberCode;
    var $departmentCode;
    var $userName;
    var $password;

    public function __construct(
        string $franchiseCode,
        string $subscriberCode,
        string $departmentCode,
        string $userName,
        string $password
    ) {
        $this->franchiseCode = $franchiseCode;
        $this->subscriberCode = $subscriberCode;
        $this->departmentCode = $departmentCode;
        $this->userName = $userName;
        $this->password = $password;
    }

}
