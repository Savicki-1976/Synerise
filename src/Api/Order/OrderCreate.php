<?php
namespace Savicki\Synerise\Api\Order;

use Savicki\Synerise\Session;
use Savicki\Synerise\Api\Interfaces;
use Savicki\Synerise\Api\Responses;

class OrderCreate implements Interfaces\Api
{

    public function __construct(private Session $session)
    {
    }

    public function handle(): Responses\Order\Order
    {
        $sessionClient = $this->session->client();

        return new Responses\Order\Order();
    }
}