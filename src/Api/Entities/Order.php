<?php
namespace Savicki\Synerise\Api\Entities;

use  Savicki\Synerise\Api\Interfaces;

class Order extends Entity implements Interfaces\Entity
{
    private Client $client;
    private ?Amount $discountAmount;
    private string $orderId;
    private ?PaymentInfo $paymentInfo;
    private Amount $revenue;
    private Amount $value;
    private string $source;
    private ?string $eventSalt;
}