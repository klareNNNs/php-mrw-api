<?php

use PHPUnit\Framework\TestCase;
use klareNNNs\MRW\Entity\ShippingUser;

class ShippingUserTest extends TestCase
{
    public function testCanConstructShippingUser()
    {
        $nif = '';
        $name = 'Jorge';
        $telephone = '666666666';
        $contact = 'Jorge';
        $atentionTo = 'Jorge';
        $observations = '';

        $shippingUser = new ShippingUser($nif, $name, $telephone, $contact, $atentionTo, $observations);
        
        $this->assertInstanceOf('klareNNNs\MRW\Entity\ShippingUser', $shippingUser);
        $this->assertEquals($nif, $shippingUser->getNif());
        $this->assertEquals($name, $shippingUser->getName());
        $this->assertEquals($telephone, $shippingUser->getTelephone());
        $this->assertEquals($contact, $shippingUser->getContact());
        $this->assertEquals($atentionTo, $shippingUser->getAtentionTo());
        $this->assertEquals($observations, $shippingUser->getObservations());

    }
    
}
