<?php
namespace Savicki\Synerise\Api;

use Savicki\Synerise\Api\Event\EventCreate;
use Savicki\Synerise\Session;

class Events
{
    public function __construct(private Session $session)
    {
        
    }

    public function create()
    {
        return new EventCreate($this->session);
    }
}