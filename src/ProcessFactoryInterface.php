<?php

namespace Violinist\ProcessFactory;

interface ProcessFactoryInterface
{
    /**
     * Get a process instance.
     *
     * The function signature is the same as the symfony process command.
     *
     * @return \Symfony\Component\Process\Process
     */
    public function getProcess(array $command, ?string $cwd = null, ?array $env = null, $input = null, ?float $timeout = 60);
}
