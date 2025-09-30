<?php
namespace Savicki\Synerise\Api\Entities;

use  Savicki\Synerise\Api\Interfaces;

class Order extends Entity implements Interfaces\Entity
{
    private Client $client;
    private ?Amount $discountAmount;
    private string $orderId;
    private ?PaymentInfo $paymentInfo;
    private Amount $revenue;
    private Amount $value;
    private string $source;
    private ?string $eventSalt;


    public function getClient(): Client
    {
        return $this->client;
    }

    public function setClient(Client $client): self
    {
        $this->client = $client;
        return $this;
    }

    public function getDiscountAmount(): ?Amount
    {
        return $this->discountAmount;
    }

    public function setDiscountAmount(?Amount $discountAmount): self
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getPaymentInfo(): ?PaymentInfo
    {
        return $this->paymentInfo;
    }

    public function setPaymentInfo(?PaymentInfo $paymentInfo): self
    {
        $this->paymentInfo = $paymentInfo;
        return $this;
    }

    public function getRevenue(): Amount
    {
        return $this->revenue;
    }

    public function setRevenue(Amount $revenue): self
    {
        $this->revenue = $revenue;
        return $this;
    }


    public function getValue(): Amount
    {
        return $this->value;
    }

    public function setValue(Amount $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;
        return $this;
    }
    public function getEventSalt(): ?string
    {
        return $this->eventSalt;
    }
    public function setEventSalt(?string $eventSalt): self
    {
        $this->eventSalt = $eventSalt;
        return $this;
    }
}