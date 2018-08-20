<?php

declare(strict_types=1);

namespace Gregwar\RST\Nodes;

abstract class ImageNode extends Node
{
    protected $url;
    protected $options;

    public function __construct($url, array $options = [])
    {
        $this->url     = $url;
        $this->options = $options;
    }
}
