<?php

namespace FaSe22\PipelineBuilder\Commands;

use Illuminate\Console\GeneratorCommand;

class PipelineBuilderCommand extends GeneratorCommand
{
    public $signature = 'build:pipeline {name}';

    public $description = 'My command';

    protected $type = 'Pipeline';


    public function handle(): int
    {
        parent::handle();
        return self::SUCCESS;
    }

    protected function getStub()
    {
        return __DIR__ . '/stubs/pipeline.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Pipelines';
    }

}
