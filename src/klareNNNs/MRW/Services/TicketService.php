<?php

namespace klareNNNs\MRW\Services;

use klareNNNs\MRW\Entity\Delivery;
use klareNNNs\MRW\Entity\AuthHeader;

class TicketService
{
    public function getTicketUrl(Delivery $delivery, AuthHeader $authHeader): string
    {
        return $delivery->getUrl()
            . '?Franq=' . $authHeader->franchiseCode
            . '&Ab=' . $authHeader->subscriberCode
            . '&Dep=' . $authHeader->departmentCode
            . '&Usr=' . $authHeader->userName
            . '&Pwd=' . $authHeader->password
            . '&NumEnv=' . $delivery->getShippingNumber();
    }
}
