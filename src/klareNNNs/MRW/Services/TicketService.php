<?php

namespace klareNNNs\MRW\Services;

use klareNNNs\MRW\Entity\Delivery;

class TicketService
{
    public function getTicketUrl(Delivery $delivery): string
    {
        $franchise = substr($delivery->getRequestNumber(), 0, 5);
        $subscriber = substr($delivery->getRequestNumber(), 5, 6);

        return $delivery->getUrl()
            . '?Franq=' . $franchise
            . '&Ab=' . $subscriber
            . '&Dep=&Pwd=password&Usr=user'
            . '&NumEnv=' . $delivery->getShippingNumber();
    }
}
