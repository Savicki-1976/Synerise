<?php
namespace Savicki\Synerise\Api\Entities;

use  Savicki\Synerise\Api\Interfaces;


class Client extends Entity implements Interfaces\Entity
{

    private ?string $customId;
    private ?int $id;
    private ?string $uuid;
    private ?string $email;


    public function setCustomId(?string $customId): self
    {
        $this->customId = $customId;
        return $this;
    }   

    public function getCustomId(): ?string
    {
        return $this->customId;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setUuid(?string $uuid): self
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }   

    public function toArray(): array
    {
        return [
            'customId' => $this->customId,
            'id' => $this->id,
            'uuid' => $this->uuid,
            'email' => $this->email,
        ];
    }
}