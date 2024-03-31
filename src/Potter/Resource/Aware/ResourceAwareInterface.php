<?php

declare(strict_types=1);

namespace Potter\Resource\Aware;

interface ResourceAwareInterface
{
    public function getResource(): mixed;
    public function hasResource(): bool;
    public function readResource(): string;
    public function writeResource(string $data): void;
}