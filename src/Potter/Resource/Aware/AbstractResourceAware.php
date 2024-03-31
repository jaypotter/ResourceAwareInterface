<?php

declare(strict_types=1);

namespace Potter\Resource\Aware;

abstract class AbstractResourceAware implements ResourceAwareInterface
{
    abstract public function getResource(): mixed;
    abstract public function hasResource(): bool;
    
    abstract public function readResource(): string;
    abstract public function getLastMessage(): string;
    
    abstract public function writeResource(string $data): void;
}