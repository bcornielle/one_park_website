<?php

namespace Statamic\Console\Commands\Generators\Addon;

class ProviderMakeCommand extends GeneratorCommand
{
    /**
     * The type of addon class being generated.
     *
     * @var string
     */
    protected $type = 'provider';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:provider {name : Name of your addon}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate an addon service provider file.';
}
