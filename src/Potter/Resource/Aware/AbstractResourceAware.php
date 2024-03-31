<?php

declare(strict_types=1);

namespace Potter\Resource\Aware;

abstract class AbstractResourceAware implements ResourceAwareInterface
{
    abstract public function getResource(): mixed;
    abstract public function hasResource(): bool;
}