<?php
namespace Savicki\Synerise\Api;

use Savicki\Synerise\Api\Order\OrderCreate;
use Savicki\Synerise\Session;

class Orders
{
    public function __construct(private Session $session)
    {
        
    }

    public function create()
    {
        return new OrderCreate($this->session);
    }
}