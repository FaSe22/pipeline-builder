<?php

namespace FaSe22\PipelineBuilder;

use FaSe22\PipelineBuilder\Commands\PipeBuilderCommand;
use FaSe22\PipelineBuilder\Commands\PipelineBuilderCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PipelineBuilderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('pipeline-builder')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_pipeline-builder_table')
            ->hasCommand(PipelineBuilderCommand::class);
    }

    public function boot()
    {
        // Register the command if we are using the application via the CLI

        $this->commands([
            PipelineBuilderCommand::class,
            PipeBuilderCommand::class
        ]);

    }
}
