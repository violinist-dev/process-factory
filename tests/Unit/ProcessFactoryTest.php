<?php

namespace Violinist\ProcessFactory\Tests;

use PHPUnit\Framework\TestCase;

class ProcessFactoryTest extends TestCase
{
    public function testBasic()
    {
        $factory = new DummyFactory();
        $process = $factory->getProcess('nonexisting_command');
        $process->run();
        $this->assertEquals(127, $process->getExitCode());
    }
}
