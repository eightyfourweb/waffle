<?php

declare(strict_types=1);

namespace Waffle\Core;

use Waffle\Abstract\AbstractCli;

class Cli extends AbstractCli
{
    public function __construct(bool $cli = true)
    {
        $this->configure(cli: $cli);
    }
}
