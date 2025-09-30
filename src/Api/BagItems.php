<?php
namespace Savicki\Synerise\Api;

use Savicki\Synerise\Api\Bags;
use Savicki\Synerise\Session;

class BagItems
{
    public function __construct(private Session $session)
    {
        
    }

    public function update()
    {
        return new Bags\ItemsUpdate($this->session);
    }
}