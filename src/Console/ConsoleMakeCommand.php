<?php
/**
 * Created by PhpStorm.
 * User: james.xue
 * Date: 2020/7/5
 * Time: 19:35
 */

namespace Vinhson\Console;

class ConsoleMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $type = "Console\\Commands";

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $name = "make:command";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new command file';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . "/stubs/console.stub";
    }

}