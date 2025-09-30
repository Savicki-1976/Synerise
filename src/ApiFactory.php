<?php

declare(strict_types=1);

namespace Savicki\Synerise;

use Savicki\Synerise\Gateway;

use Savicki\Synerise\Api;

class ApiFactory
{
    private $sessionFactory;

    public function __construct(SessionFactory $sessionFactory)
    {
        $this->sessionFactory = $sessionFactory;
    }

    public function create(Credentials $credentials): Gateway
    {
        $session = $this->sessionFactory->session($credentials);

        return new Gateway(
            new Api\Makes($session),
            new Api\BagItems($session)
        );
    }

}
