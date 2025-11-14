<?php
namespace Savicki\Synerise\Api\Entities;

use BadMethodCallException;
use  Savicki\Synerise\Api\Interfaces;


class Event extends Entity implements Interfaces\Entity
{
    private ?Client $client;
    private ?string $label;
    private ?string $action;
    
    public function setClient(Client $client): self
    {
        $this->client = $client;
        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

   
    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }
    
    public function setAction(string $action): self
    {
        $this->action = $action;
        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function toArray(): array
    {
        if ($this->client === null) {
            throw new BadMethodCallException('Client is required');
        }
        if ($this->label === null) {
            throw new BadMethodCallException('Label is required');
        }
        if ($this->action === null) {
            throw new BadMethodCallException('Action is required');
        }

        return [
            'client' => $this->client->toArray(),
            'label' => $this->label,
            'action' => $this->action,
        ];
    }

}