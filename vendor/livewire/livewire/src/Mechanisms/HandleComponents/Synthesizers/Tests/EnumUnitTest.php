<?php

namespace Livewire\Mechanisms\HandleComponents\Synthesizers\Tests;

use Livewire\Component;
use Livewire\Livewire;
use ValueError;

class EnumUnitTest extends \Tests\TestCase
{
    public function test_public_properties_can_be_cast()
    {
        Livewire::test(ComponentWithPublicEnumCasters::class)
            ->call('storeTypeOf')
            ->assertSet('typeOf', TestingEnum::class)
            ->assertSet('enum', TestingEnum::from('Be excellent to each other'));
    }

    public function test_nullable_public_property_can_be_cast()
    {
        $testable = Livewire::test(ComponentWithNullablePublicEnumCaster::class)
            ->assertSetStrict('status', null)
            ->updateProperty('status', 'Be excellent to each other')
            ->assertSet('status', TestingEnum::TEST)
            ->updateProperty('status', '')
            ->assertSetStrict('status', null);

        $this->expectException(ValueError::class);
        $testable->updateProperty('status', 'Be excellent excellent to each other');
    }
}

enum TestingEnum: string
{
    case TEST = 'Be excellent to each other';
}

class ComponentWithPublicEnumCasters extends Component
{
    public $typeOf;
    public $enum;

    public function hydrate()
    {
        $this->enum = TestingEnum::TEST;
    }

    public function dehydrate()
    {
        $this->enum = TestingEnum::from($this->enum->value);
    }

    public function mount()
    {
        $this->enum = TestingEnum::TEST;
    }

    public function storeTypeOf()
    {
        $this->typeOf = get_class($this->enum);
    }

    public function render()
    {
        return view('null-view');
    }
}

class ComponentWithNullablePublicEnumCaster extends Component
{
    public ?TestingEnum $status = null;

    public function render()
    {
        return view('null-view');
    }
}
