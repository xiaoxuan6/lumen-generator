<?php

namespace Vinhson;

use Vinhson\Console\ControllerMakeCommand;
use Illuminate\Support\ServiceProvider;

class LumenGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(ControllerMakeCommand::class);
    }

}
