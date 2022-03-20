<?php

namespace FaSe22\PipelineBuilder\Commands;

use Illuminate\Console\Command;

class PipelineBuilderCommand extends Command
{
    public $signature = 'pipeline-builder';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
