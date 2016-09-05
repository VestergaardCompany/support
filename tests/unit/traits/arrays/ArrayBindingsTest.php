<?php

use VCAS\Support\Traits\Arrays\BindingsTrait;

/**
 * Class ArrayBindingsTest
 *
 * @group traits
 * @group arrays
 * @group bindings
 * @coversDefaultClass VCAS\Support\Traits\Arrays\BindingsTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayBindingsTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(BindingsTrait::class, $this->faker->words(), $this->faker->words());
    }
}