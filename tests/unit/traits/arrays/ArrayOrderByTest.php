<?php

use VCAS\Support\Traits\Arrays\OrderByTrait;

/**
 * Class ArrayOrderByTest
 *
 * @group traits
 * @group arrays
 * @group order-by
 * @coversDefaultClass VCAS\Support\Traits\Arrays\OrderByTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayOrderByTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(OrderByTrait::class, $this->faker->words(), $this->faker->words());
    }
}