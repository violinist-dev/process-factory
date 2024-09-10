<?php

namespace Violinist\ProcessFactory\Tests;

use Symfony\Component\Process\Process;
use Violinist\ProcessFactory\ProcessFactoryInterface;

class DummyFactory implements ProcessFactoryInterface
{
    public function getProcess(array $command, ?string $cwd = null, ?array $env = null, $input = null, ?float $timeout = 60)
    {
        return new Process($command, $cwd, $env, $input, $timeout);
    }
}
