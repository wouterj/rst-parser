<?php

declare(strict_types=1);

namespace Doctrine\RST\Nodes;

class ParagraphNode extends Node
{
    /** @var SpanNode */
    protected $value;

    public function __construct(SpanNode $value)
    {
        parent::__construct($value);
    }

    public function getValue(): SpanNode
    {
        return $this->value;
    }
}
