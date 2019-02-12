<?php

namespace Violinist\ProcessFactory\Tests;

use Symfony\Component\Process\Process;
use Violinist\ProcessFactory\ProcessFactoryInterface;

class DummyFactory implements ProcessFactoryInterface
{
  public function getProcess($commandline, $cwd = null, array $env = null, $input = null, $timeout = 60, array $options = null)
  {
      return new Process($commandline, $cwd, $env, $input, $timeout, $options);
  }
}
