<?php

namespace spec\PhpSpec\Process\Shutdown;

use PhpSpec\ObjectBehavior;
use PhpSpec\Process\Shutdown\ShutdownActionInterface;
use Prophecy\Argument;

class ShutdownSpec extends ObjectBehavior
{
    function it_has_type_shutdown()
    {
        $this->beAnInstanceOf('PhpSpec/Process/Shutdown/Shutdown');
    }

    function it_runs_through_all_registered_actions(ShutdownActionInterface $action)
    {
        $action->runAction(null)->shouldBeCalled();
        $this->registerAction($action);
        $this->runShutdown();
    }
}
