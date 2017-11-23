<?php

use PHPUnit\Framework\TestCase;
use klareNNNs\MRW\Entity\ServiceData;

class ServiceDataTest extends TestCase
{
    public function testCanConstructServiceData()
    {
        $date = date("dd/mm/YY");
        $reference = 'BWZXTFSZU';
        $onFranchise = 'N';
        $serviceCode = '0200';
        $serviceDescription = '';
        $items = '';
        $numberOfItems = '1';
        $weight = '1';
        $saturdayDelivery = 'N';
        $return = 'N';
        $refund = 'O';
        $refundAmount = '25,9';

        $serviceData = new ServiceData($date, $reference, $onFranchise, $serviceCode, $serviceDescription, $items,
            $numberOfItems, $weight, $saturdayDelivery, $return, $refund, $refundAmount);

        $this->assertInstanceOf('klareNNNs\MRW\Entity\ServiceData', $serviceData);
        $this->assertEquals($date, $serviceData->getDate());
        $this->assertEquals($reference, $serviceData->getReference());
        $this->assertEquals($onFranchise, $serviceData->getOnFranchise());
        $this->assertEquals($serviceCode, $serviceData->getServiceCode());
        $this->assertEquals($serviceDescription, $serviceData->getServiceDescription());
        $this->assertEquals($items, $serviceData->getItems());
        $this->assertEquals($numberOfItems, $serviceData->getNumberOfItems());
        $this->assertEquals($weight, $serviceData->getWeight());
        $this->assertEquals($saturdayDelivery, $serviceData->getSaturdayDelivery());
        $this->assertEquals($return, $serviceData->getReturn());
        $this->assertEquals($refund, $serviceData->getRefund());
        $this->assertEquals($refundAmount, $serviceData->getRefundAmount());
    }
}
