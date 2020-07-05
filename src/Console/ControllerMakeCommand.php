<?php

namespace Vinhson\Console;

class ControllerMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $type = 'Http\Controllers';

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $name = 'make:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new controller file';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . "/stubs/controller.stub";
    }

    /**
     * Build the class with the given name.
     *
     * @param  string $name
     * @return string
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        return str_replace(
            [
                "namespace DummyNamespace;",
                "DummyClass",
            ],
            [
                "namespace {$this->getDefaultNamespace()};",
                $name,
            ],
            $stub
        );
    }

}
