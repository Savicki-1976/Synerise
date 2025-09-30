<?php

declare(strict_types=1);

namespace Savicki\Synerise;


class SessionFactory
{
    private $sessions = [];
    
    const API = 'https://api.synerise.com';

    public function session(Credentials $credentials): Session
    {
        $credentials->setApiUrl($credentials->getApiUrl() ?? self::API);
        $key = sha1(self::API.':'.$credentials->getApiKey());
        return (isset($this->sessions[$key])) ? $this->sessions[$key] : ($this->sessions[$key] = new Session($credentials));
    }
}
