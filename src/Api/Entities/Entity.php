<?php
namespace Savicki\Synerise\Api\Entities;

use  Savicki\Synerise\Api\Interfaces;


abstract class Entity implements Interfaces\Entity
{
    public function toArray(): array
    {
        $data = [];

        foreach ((new \ReflectionObject($this))->getProperties() as $property) {
            $property->setAccessible(true);
            $name = $property->getName();
            $value = $property->getValue($this);

            if ($value instanceof self) {
                $data[$name] = $value->toArray();
            } elseif (is_object($value) && method_exists($value, 'toArray')) {
                $data[$name] = $value->toArray();
            } elseif (is_array($value)) {
                $data[$name] = $this->mapArray($value);
            } else {
                $data[$name] = $value;
            }
        }

        return $data;
    }

    private function mapArray(array $items): array
    {
        return array_map(function ($item) {
            if ($item instanceof self) {
                return $item->toArray();
            } elseif (is_object($item) && method_exists($item, 'toArray')) {
                return $item->toArray();
            }
            return $item;
        }, $items);
    }
}