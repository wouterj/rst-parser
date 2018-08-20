<?php

declare(strict_types=1);

namespace Gregwar\RST\LaTeX\Nodes;

use Gregwar\RST\Nodes\SeparatorNode as Base;

class SeparatorNode extends Base
{
    public function render() : string
    {
        return '\\ \\';
    }
}
