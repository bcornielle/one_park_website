<?php
namespace GuzzleHttp\Promise;

/**
 * A task queue that executes tasks in a FIFO order.
 *
 * This task queue class is used to settle promises asynchronously and
 * maintains a constant stack size. You can use the task queue asynchronously
 * by calling the `run()` function of the global task queue in an event loop.
 *
 *     GuzzleHttp\Promise\queue()->run();
 */
class TaskQueue implements TaskQueueInterface
{
    private $enableShutdown = true;
    private $queue = [];

    public function __construct($withShutdown = true)
    {
        if ($withShutdown) {
            register_shutdown_function(function () {
                if ($this->enableShutdown) {
                    // Only run the tasks if an E_ERROR didn't occur.
                    $err = error_get_last();
                    if (!$err || ($err['type'] ^ E_ERROR)) {
                        $this->run();
                    }
                }
            });
        }
    }

    public function isEmpty()
    {
        return !$this->queue;
    }

    public function add(callable $task)
    {
        $this->queue[] = $task;
    }

    public function run()
    {
        /** @var callable $task */
        while ($task = array_shift($this->queue)) {
            $task();
        }
    }

    /**
     * The task queue will be run and exhausted by default when the process
     * exits IFF the exit is not the result of a PHP E_ERROR error.
     *
     * You can disable running the automatic shutdown of the queue by calling
     * this function. If you disable the task queue shutdown process, then you
     * MUST either run the task queue (as a result of running your event loop
     * or manually using the run() method) or wait on each outstanding promise.
     *
     * Note: This shutdown will occur before any destructors are triggered.
     */
    public function disableShutdown()
    {
        $this->enableShutdown = false;
    }
}
