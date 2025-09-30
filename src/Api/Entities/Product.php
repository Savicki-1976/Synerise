<?php
namespace Savicki\Synerise\Api\Entities;

use BadMethodCallException;
use  Savicki\Synerise\Api\Interfaces;


class Product extends Entity implements Interfaces\Entity
{
    private Amount $finalUnitPrice;
    private ?string $name;
    private string $sku;
    /** @var array<string> */
    private array $categories;
    private ?string $image;
    private ?string $url;
    private ?Amount $netUnitPrice;
    private ?float $tax;
    private int $quantity;
    private ?Amount $regularPrice;
    private ?Amount $discountPrice;
    private float $discountPercent;
     /** @var array<string, mixed> */
    private array $extraProperties = [];


    public function getFinalUnitPrice(): Amount
    {
        return $this->finalUnitPrice;
    }
    
    public function setFinalUnitPrice(Amount $finalUnitPrice): self
    {
        $this->finalUnitPrice = $finalUnitPrice;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }


    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getNetUnitPrice(): ?Amount
    {
        return $this->netUnitPrice;
    }

    public function setNetUnitPrice(?Amount $netUnitPrice): self
    {
        $this->netUnitPrice = $netUnitPrice;
        return $this;
    }

    public function getTax(): ?float
    {
        return $this->tax;
    }

    public function setTax(?float $tax): self
    {
        $this->tax = $tax;
        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getRegularPrice(): ?Amount
    {
        return $this->regularPrice;
    }

    public function setRegularPrice(?Amount $regularPrice): self
    {
        $this->regularPrice = $regularPrice;
        return $this;
    }

    public function getDiscountPrice(): ?Amount
    {
        return $this->discountPrice;
    }

    public function setDiscountPrice(?Amount $discountPrice): self
    {
        $this->discountPrice = $discountPrice;
        return $this;
    }

    public function getDiscountPercent(): float
    {
        return $this->discountPercent;
    }

    public function setDiscountPercent(float $discountPercent): self
    {
        $this->discountPercent = $discountPercent;
        return $this;
    }

    public function getExtraProperties(): array
    {
        return $this->extraProperties;
    }     


    public function __call(string $method, array $args): mixed
    {
        if (str_starts_with($method, 'set')) {
            $property = lcfirst(substr($method, 3));
            $this->extraProperties[$property] = $args[0] ?? null;
            return $this;
        }

        if (str_starts_with($method, 'get')) {
            $property = lcfirst(substr($method, 3));
            return $this->extraProperties[$property] ?? null;
        }

        throw new BadMethodCallException("Method $method does not exist");
    }

   
}