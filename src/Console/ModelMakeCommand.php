<?php

namespace Vinhson\Console;

use Illuminate\Support\Str;

class ModelMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $type = 'Models';

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $name = 'make:model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new model file';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . "/stubs/model.stub";
    }

}
