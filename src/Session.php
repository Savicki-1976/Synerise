<?php

declare(strict_types=1);

namespace Savicki\Synerise;

use GuzzleHttp\Client;

class Session
{
    private ?Client $client = null;
    private ?string $token = null;

    public function __construct(private Credentials $credentials){

    }

    public function client(): ?Client
    {
        if (!$this->client) {
            $this->initializeSession();
        }

        return $this->client;
    }


    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function headers()
    {
        $headers = [
            'accept' => 'application/json;charset=UTF-8',
            'Content-Type' => 'application/json;charset=UTF-8',
            'Api-Version' => '4.4'
        ];

        if($this->getToken()) {
            $headers['Authorization'] = 'Bearer '.$this->getToken();
        }


        return $headers;
    }

    private function initializeSession(): void
    {

        if($this->getToken() === null) {
            $this->login();
        }

        $this->client = new Client([
            'base_uri' => $this->credentials->getApiUrl(),
            'headers'  => $this->headers(),
        ]);
    }

    private function login(): self
    {
        $client = new Client([
            'base_uri' => $this->credentials->getApiUrl(),
            'headers'  => $this->headers()
        ]);
        $response = $client->post('/uauth/v2/auth/login/profile', [
            'json' => [
                'apiKey' => $this->credentials->getApiKey(),
            ]
        ]);

        $content = json_decode($response->getBody()->getContents());

        $this->setToken($content?->token);
        return $this;
    }
}
