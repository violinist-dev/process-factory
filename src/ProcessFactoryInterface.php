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
    public function getProcess($commandline, $cwd = null, array $env = null, $input = null, $timeout = 60, array $options = null);
}
