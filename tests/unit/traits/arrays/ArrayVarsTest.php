<?php

use VCAS\Support\Traits\Arrays\VarsTrait;

/**
 * Class ArrayVarsTest
 *
 * @group traits
 * @group arrays
 * @group vars
 * @coversDefaultClass VCAS\Support\Traits\Arrays\VarsTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayVarsTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(VarsTrait::class, $this->faker->words(), $this->faker->words());
    }
}