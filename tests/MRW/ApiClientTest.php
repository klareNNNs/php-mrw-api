<?php

use PHPUnit\Framework\TestCase;
use \MRW\Entity\Delivery;

class ApiClientTest extends TestCase
{
    public function testTestCool()
    {
        $this->assertEquals(12, (new Delivery())->getNum());
    }
}
