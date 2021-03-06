<?php

namespace Vinhson;

use Vinhson\Console;
use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Console\Factories\FactoryMakeCommand;

class LumenGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            Console\StorageLinkCommand::class,
            Console\EnvironmentCommand::class,
            Console\KeyGenerateCommand::class,
        ]);

        if (!Str::startsWith($this->app->environment(), "prod")) {
            $this->commands([
                Console\ControllerMakeCommand::class,
                Console\ConsoleMakeCommand::class,
                Console\EventMakeCommand::class,
                Console\JobMakeCommand::class,
                Console\ListenerMakeCommand::class,
                Console\ModelMakeCommand::class,
                Console\ObserverMakeCommand::class,
                Console\MiddlewareMakeCommand::class,
                Console\EventGenerateCommand::class,
                Console\ExceptionMakeCommand::class,
                Console\RequestMakeCommand::class,
                Console\RuleMakeCommand::class,
                Console\ProviderMakeCommand::class,

                // Application
                FactoryMakeCommand::class,
            ]);
        }

    }

}
