<?php

namespace Savicki\Synerise;


class Credentials   {

    private ?string $apiKey = null;
    private ?string $apiUrl = null;

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function setApiUrl(string $apiUrl): self
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    public function getApiUrl(): ?string
    {
        return $this->apiUrl;
    }

   
}