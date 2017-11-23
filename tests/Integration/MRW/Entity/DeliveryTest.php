<?php

use PHPUnit\Framework\TestCase;

class DeliveryTest extends TestCase
{
    public function testTicketUrlIsString()
    {
        $delivery = new \MRW\Entity\Delivery('1', '', '0062001701720171123113753547', '006200911860', 'http://sagec-test.mrw.es/Panel.aspx');

        $this->assertTrue(is_string($delivery->getTicketUrl()));
    }

    public function testDeliveryIsCorrect()
    {
        $delivery = new \MRW\Entity\Delivery('1', '', '0062001701720171123113753547', '006200911860', 'http://sagec-test.mrw.es/Panel.aspx');

        $this->assertTrue($delivery->getEstado()==1);
    }

    public function testDeliveryHasFailed()
    {
        $delivery = new \MRW\Entity\Delivery('0', 'Error XXXXX', '', '', 'http://sagec-test.mrw.es/Panel.aspx');

        $this->assertTrue($delivery->getEstado()==0);
    }

}