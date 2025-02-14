<?php

declare(strict_types=1);

namespace Loupe\Loupe\Internal\Filter\Ast;

class Ast
{
    private array $nodes = [];

    public function addNode(Node $node): self
    {
        $this->nodes[] = $node;

        return $this;
    }

    /**
     * @return array<Node>
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }

    public function toArray(): array
    {
        $result = [];

        foreach ($this->nodes as $node) {
            $result[] = $node->toArray();
        }

        return $result;
    }
}
