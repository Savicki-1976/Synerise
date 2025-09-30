<?php
namespace Savicki\Synerise\Api\Entities\Bags;

use  Savicki\Synerise\Api\Interfaces;
use Savicki\Synerise\Api\Entities\Entity;


class Item extends Entity implements Interfaces\Entity
{
    private string $itemKey;
    private array $value;

    public function setItemKey(string $itemKey): self
    {   
        $this->itemKey = $itemKey;
        return $this;
    }

    public function getItemKey(): string
    {
        return $this->itemKey;
    }

    public function setValue(array $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getValue(): array
    {
        return $this->value;
    }
    public function toArray(): array
    {
        return [
            'itemKey' => $this->getItemKey(),
            'value' => $this->getValue(),
        ];
    }
}