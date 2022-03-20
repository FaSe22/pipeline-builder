<?php
/**
 * Class PipeBuilderCommand
 * @package FaSe22\PipelineBuilder\Commands
 * @author Sebastian Faber <sebastian@startup-werk.de>
 */

namespace FaSe22\PipelineBuilder\Commands;

use Illuminate\Console\GeneratorCommand;

class PipeBuilderCommand extends GeneratorCommand
{
    public $signature = 'build:pipe {name}';

    public $description = 'Generate pipes';

    protected $type = 'Pipe';

    public function handle(): int
    {
        parent::handle();

        return self::SUCCESS;
    }

    protected function getStub()
    {
        return __DIR__ . '/stubs/pipe.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '/Pipelines/Pipes';
    }
}
