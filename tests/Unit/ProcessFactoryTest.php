<?php

namespace Violinist\ProcessFactory\Tests;

use PHPUnit\Framework\TestCase;

class ProcessFactoryTest extends TestCase
{
    public function testBasic()
    {
        $factory = new DummyFactory();
        $process = $factory->getProcess(['nonexisting_command']);
        try {
            $process->run();
        } catch (\Exception $e) {
            // Introduced in symfony/process 7.
            $this->assertStringContainsString('No such file or directory', $e->getMessage());
        }
        $this->assertEquals(127, $process->getExitCode());
    }
}
