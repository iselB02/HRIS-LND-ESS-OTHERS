<?php

namespace Livewire\Tests;

use Livewire\Component;
use Livewire\Livewire;

class ComponentIsMacroableUnitTest extends \Tests\TestCase
{
    public function test_it_resolves_the_mount_parameters()
    {
        Component::macro('macroedMethod', function ($first, $second) {
            return [$first, $second];
        });

        Livewire::test(ComponentWithMacroedMethodStub::class)
            ->assertSet('foo', ['one', 'two']);
    }
}

class ComponentWithMacroedMethodStub extends Component
{
    public $foo;

    public function mount()
    {
        $this->foo = $this->macroedMethod('one', 'two');
    }

    public function render()
    {
        return view('null-view');
    }
}
