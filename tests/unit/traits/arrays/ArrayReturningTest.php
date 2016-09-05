<?php

use VCAS\Support\Traits\Arrays\ReturningTrait;

/**
 * Class ArrayReturningTest
 *
 * @group traits
 * @group arrays
 * @group returning
 * @coversDefaultClass VCAS\Support\Traits\Arrays\ReturningTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayReturningTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ReturningTrait::class, $this->faker->words(), $this->faker->words());
    }
}