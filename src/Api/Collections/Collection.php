<?php

namespace Savicki\Synerise\Api\Collections;

class Collection extends \ArrayObject
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, \ArrayObject::ARRAY_AS_PROPS);
    }

    public function add($item): void
    {
        $this->append($item);
    }

    public function all(): array
    {
        return $this->getArrayCopy();
    }

    public function toArray(): array
    {
        $result = [];
        foreach ($this as $item) {
            if (method_exists($item, 'toArray')) {
                $result[] = $item->toArray();
            } else {
                $result[] = $item;
            }
        }
        return $result;
    }
}