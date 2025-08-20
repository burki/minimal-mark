<?php

declare(strict_types=1);

/*
 * This file is based on the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Original code based on the CommonMark JS reference parser (https://bitly.com/commonmark-js)
 *  - (c) John MacFarlane
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MinimalMark;

use League\CommonMark\MarkdownConverter;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\Autolink\AutolinkExtension;

/**
 * Converts MinimalMark-compatible Markdown to HTML.
 */
final class MinimalMarkConverter extends MarkdownConverter
{
    /**
     * Create a new converter pre-configured for MinimalMark
     * and AutoLink
     *
     * @param array<string, mixed> $config
     */
    public function __construct(array $config = [])
    {
        $environment = new Environment($config);

        $environment->addExtension(new \MinimalMark\Extension\MinimalMark\MinimalMarkExtension());
        $environment->addExtension(new AutolinkExtension());

        parent::__construct($environment);
    }

    public function getEnvironment(): Environment
    {
        \assert($this->environment instanceof Environment);

        return $this->environment;
    }
}
