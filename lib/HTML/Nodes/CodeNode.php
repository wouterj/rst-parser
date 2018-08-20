<?php

declare(strict_types=1);

namespace Gregwar\RST\HTML\Nodes;

use Gregwar\RST\Nodes\CodeNode as Base;
use function htmlspecialchars;

class CodeNode extends Base
{
    public function render() : string
    {
        if ($this->raw) {
            return $this->value;
        }

        return '<pre><code class="' . $this->language . '">' . htmlspecialchars($this->value) . '</code></pre>';
    }
}
