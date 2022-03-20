<?php

namespace FaSe22\PipelineBuilder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FaSe22\PipelineBuilder\PipelineBuilder
 */
class PipelineBuilder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pipeline-builder';
    }
}
