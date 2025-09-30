<?php
namespace Savicki\Synerise\Api\Entities;

use  Savicki\Synerise\Api\Interfaces;


class Amount extends Entity implements Interfaces\Entity
{

    private float $amount;
    private string $currency;


    public function setAmount(float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

}