<?php
namespace Savicki\Synerise\Api;

use Savicki\Synerise\Api\Collections\Collection;
use Savicki\Synerise\Api\Entities;

class Makes
{
    public function __construct()
    {
            
    }

    public function order(): Entities\Order
    {
        return new Entities\Order();
    }

    public function amount(): Entities\Amount
    {
        return new Entities\Amount();
    }

    public function product(): Entities\Product
    {
        return new Entities\Product();
    }

    public function client(): Entities\Client
    {
        return new Entities\Client();
    }

    public function item(): Entities\Bags\Item
    {
        return new Entities\Bags\Item();
    }

    public function collection(): Collection
    {
        return new Collection();
    }

}