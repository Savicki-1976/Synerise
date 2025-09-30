<?php
declare(strict_types=1);

namespace Savicki\Synerise;


use Savicki\Synerise\Api;


class Gateway
{
    public function __construct(
        private Api\Makes $makes,
        private Api\BagItems $bagItems
    ) {

    }

    public function makes(): Api\Makes
    {
        return $this->makes;
    }

    public function bagItems(): Api\BagItems
    {
        return $this->bagItems;
    }
}