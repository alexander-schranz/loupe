<?php

declare(strict_types=1);

namespace Loupe\Loupe\Internal\Filter\Ast;

abstract class Node
{
    abstract public function toArray(): array;
}
