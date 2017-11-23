<?php

use klareNNNs\MRW\Entity\AuthHeader;
use klareNNNs\MRW\Entity\Delivery;
use PHPUnit\Framework\TestCase;
use klareNNNs\MRW\Services\TicketService;

class TicketServiceTest extends TestCase
{
    public function testTicketServiceReturnsAndUrl()
    {
        $state = 1;
        $message = 'Message';
        $requestNumber = '000666777';
        $shippingNumber = '77766600';
        $url = 'http://fakeurl.com';

        $delivery = new Delivery($state, $message, $requestNumber, $shippingNumber, $url);

        $franchise = 'franchise';
        $subscriber = 'subscriber';
        $department = 'departmen';
        $user = 'user';
        $password = 'owd';
        $auth = new AuthHeader($franchise, $subscriber, $department, $user, $password);

        $ticketUrl = (new TicketService())->getTicketUrl($delivery, $auth);

        $this->assertInternalType('string', $ticketUrl);
    }
}
