<?php

use PHPUnit\Framework\TestCase;
use klareNNNs\MRW\Entity\AuthHeader;

class AuthHeaderTest extends TestCase
{
    public function testCanConstructAuthHeader()
    {
        $franchise = 'franchise';
        $subscriber = 'subscriber';
        $department = 'departmen';
        $user = 'user';
        $password = 'owd';
        $auth = new AuthHeader($franchise, $subscriber, $department, $user, $password);

        $this->assertInstanceOf('klareNNNs\MRW\Entity\AuthHeader', $auth);
        $this->assertEquals($franchise, $auth->franchiseCode);
        $this->assertEquals($subscriber, $auth->subscriberCode);
        $this->assertEquals($department, $auth->departmentCode);
        $this->assertEquals($user, $auth->userName);
        $this->assertEquals($password, $auth->password);
    }
}
