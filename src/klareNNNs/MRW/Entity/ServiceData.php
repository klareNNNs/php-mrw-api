<?php

namespace klareNNNs\MRW\Entity;

class ServiceData
{
    private $date;
    private $reference;
    private $onFranchise;
    private $serviceCode;
    private $serviceDescription;
    private $items;
    private $numberOfItems;
    private $weight;
    private $saturdayDelivery;
    private $return;
    private $refund;
    private $refundAmount;
    private $notificationsMail;
    private $notificationsSMS;

    public function __construct(
        string $date,
        string $reference,
        string $onFranchise,
        string $serviceCode,
        string $serviceDescription,
        string $items,
        string $numberOfItems,
        string $weight,
        string $saturdayDelivery,
        string $return,
        string $refund,
        string $refundAmount,
        string $notificationsMail,
        string $notificationsSMS
    ) {
        $this->date = $date;
        $this->reference = $reference;
        $this->onFranchise = $onFranchise;
        $this->serviceCode = $serviceCode;
        $this->serviceDescription = $serviceDescription;
        $this->items = $items;
        $this->numberOfItems = $numberOfItems;
        $this->weight = $weight;
        $this->saturdayDelivery = $saturdayDelivery;
        $this->return = $return;
        $this->refund = $refund;
        $this->refundAmount = $refundAmount;
        $this->notificationsMail = $notificationsMail;
        $this->notificationsSMS = $notificationsSMS;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getOnFranchise(): string
    {
        return $this->onFranchise;
    }

    public function getServiceCode(): string
    {
        return $this->serviceCode;
    }

    public function getServiceDescription(): string
    {
        return $this->serviceDescription;
    }

    public function getItems(): string
    {
        return $this->items;
    }

    public function getNumberOfItems(): string
    {
        return $this->numberOfItems;
    }

    public function getWeight(): string
    {
        return $this->weight;
    }

    public function getSaturdayDelivery(): string
    {
        return $this->saturdayDelivery;
    }

    public function getReturn(): string
    {
        return $this->return;
    }

    public function getRefund(): string
    {
        return $this->refund;
    }

    public function getRefundAmount(): string
    {
        return $this->refundAmount;
    }

    public function getNotificationsMail(): string
    {
        return $this->notificationsMail;
    }

    public function getNotificationsSMS(): string
    {
        return $this->notificationsSMS;
    }

}
