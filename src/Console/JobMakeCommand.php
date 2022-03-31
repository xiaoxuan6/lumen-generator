<?php
/**
 * This file is part of Lumen Generator package.
 *
 * (c) vinhson <15227736751@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vinhson\Console;

class JobMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $type = 'Jobs';

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $name = 'make:job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new job file';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/job.stub';
    }
}
