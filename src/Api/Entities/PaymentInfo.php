<?php
namespace Savicki\Synerise\Api\Entities;

use  Savicki\Synerise\Api\Interfaces;


class PaymentInfo extends Entity implements Interfaces\Entity
{
    private string $method;

    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }

    public function getMethod(): string
    {
        return $this->method;
    }
}