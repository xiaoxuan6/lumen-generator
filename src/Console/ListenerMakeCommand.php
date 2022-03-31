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

use Symfony\Component\Console\Input\InputOption;

class ListenerMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $type = 'Listeners';

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $name = 'make:listener';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new listener file';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->option('event')
            ? __DIR__ . '/stubs/listener.stub'
            : __DIR__ . '/stubs/listener-plain.stub';
    }

    /**
     * Build the class with the given name.
     *
     * @param string $name
     * @return string
     */
    protected function buildClass($name)
    {
        $event = $this->option('event');

        return $event != null ? $this->makeEvent($name, $event) : parent::buildClass($name);
    }

    /**
     * Make build with event the class.
     *
     * @param string $name
     * @param string $stub
     * @return string
     */
    protected function makeEvent($name, $event)
    {
        $this->callSilent('make:event', ['name' => $event]);

        return str_replace(
            [
                'DummyFullEvent',
                'DummyEvent',
            ],
            [
                $this->getEventNamespace($event),
                $event
            ],
            parent::buildClass($name)
        );
    }

    /**
     * Get the event nameapace.
     *
     * @param string $name
     * @return string
     */
    protected function getEventNamespace($eventName)
    {
        return $this->laravel->getNamespace() . "Events\\{$eventName}";
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['event', 'e', InputOption::VALUE_OPTIONAL, 'The event class being listened for'],
        ];
    }
}
