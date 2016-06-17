<?php

use VCAS\Support\Traits\Arrays\DataTrait;

/**
 * Class ArrayDataTest
 *
 * @group traits
 * @group arrays
 * @group data
 * @coversDefaultClass VCAS\Support\Traits\Arrays\DataTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayDataTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(DataTrait::class, $this->faker->words(), $this->faker->words());
    }
}