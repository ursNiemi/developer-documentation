<?php

namespace helpers\Markdown;

use Michelf\MarkdownExtra;

/**
 * Parses Markdown Extra using michelf/markdown.
 */
class MichelfMarkdown implements MarkdownParserInterface
{
    public function parse($markdown)
    {
        return MarkdownExtra::defaultTransform($markdown);
    }
}
