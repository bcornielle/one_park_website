<?php

namespace Illuminate\Queue\Console;

use Exception;
use RuntimeException;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Queue\IronQueue;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

/**
 * @deprecated since version 5.1
 */
class SubscribeCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'queue:subscribe';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Subscribe a URL to an Iron.io push queue';

    /**
     * The queue meta information from Iron.io.
     *
     * @var object
     */
    protected $meta;

    /**
     * Execute the console command.
     *
     * @return void
     *
     * @throws \RuntimeException
     */
    public function fire()
    {
        $iron = $this->laravel['queue']->connection();

        if (! $iron instanceof IronQueue) {
            throw new RuntimeException('Iron.io based queue must be default.');
        }

        $iron->getIron()->updateQueue($this->argument('queue'), $this->getQueueOptions());

        $this->line('<info>Queue subscriber added:</info> <comment>'.$this->argument('url').'</comment>');
    }

    /**
     * Get the queue options.
     *
     * @return array
     */
    protected function getQueueOptions()
    {
        return [
            'push_type' => $this->getPushType(), 'subscribers' => $this->getSubscriberList(),
        ];
    }

    /**
     * Get the push type for the queue.
     *
     * @return string
     */
    protected function getPushType()
    {
        if ($this->option('type')) {
            return $this->option('type');
        }

        try {
            return $this->getQueue()->push_type;
        } catch (Exception $e) {
            return 'multicast';
        }
    }

    /**
     * Get the current subscribers for the queue.
     *
     * @return array
     */
    protected function getSubscriberList()
    {
        $subscribers = $this->getCurrentSubscribers();

        $url = $this->argument('url');

        if (! Str::startsWith($url, ['http://', 'https://'])) {
            $url = $this->laravel['url']->to($url);
        }

        $subscribers[] = ['url' => $url];

        return $subscribers;
    }

    /**
     * Get the current subscriber list.
     *
     * @return array
     */
    protected function getCurrentSubscribers()
    {
        try {
            return $this->getQueue()->subscribers;
        } catch (Exception $e) {
            return [];
        }
    }

    /**
     * Get the queue information from Iron.io.
     *
     * @return object
     */
    protected function getQueue()
    {
        if (isset($this->meta)) {
            return $this->meta;
        }

        return $this->meta = $this->laravel['queue']->getIron()->getQueue($this->argument('queue'));
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['queue', InputArgument::REQUIRED, 'The name of Iron.io queue.'],

            ['url', InputArgument::REQUIRED, 'The URL to be subscribed.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['type', null, InputOption::VALUE_OPTIONAL, 'The push type for the queue.'],
        ];
    }
}
