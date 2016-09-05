<?php

use VCAS\Support\Traits\Arrays\WhereTrait;

/**
 * Class ArrayWhereTest
 *
 * @group traits
 * @group arrays
 * @group where
 * @coversDefaultClass VCAS\Support\Traits\Arrays\WhereTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayWhereTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(WhereTrait::class, $this->faker->words(), $this->faker->words());
    }
}