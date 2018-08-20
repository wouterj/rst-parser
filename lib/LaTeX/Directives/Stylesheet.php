<?php

declare(strict_types=1);

namespace Gregwar\RST\LaTeX\Directives;

use Gregwar\RST\Directive;
use Gregwar\RST\Parser;

/**
 * Adds a stylesheet to a document, example:
 *
 * .. stylesheet:: style.css
 */
class Stylesheet extends Directive
{
    public function getName() : string
    {
        return 'stylesheet';
    }

    public function process(Parser $parser, $node, $variable, $data, array $options) : void
    {
    }
}
