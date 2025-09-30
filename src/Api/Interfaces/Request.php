<?php
namespace Savicki\Synerise\Api\Interfaces;


interface Request
{
    public function prepare(): self;
}