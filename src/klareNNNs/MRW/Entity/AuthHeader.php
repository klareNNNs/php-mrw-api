<?php

namespace klareNNNs\MRW\Entity;

class AuthHeader
{
    var $franchiseCode;
    var $subscriberCode;
    var $departmentCode;
    var $userName;
    var $password;

    public function __construct(string $franchise, string $subscriber, string $department, string $user, string $pass)
    {
        $this->franchiseCode = $franchise;
        $this->subscriberCode = $subscriber;
        $this->departmentCode = $department;
        $this->userName = $user;
        $this->password = $pass;
    }

}
