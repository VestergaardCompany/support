<?php

use VCAS\Support\Traits\Integers\TtlTrait;

/**
 * Class IntegerTtlTest
 *
 * @group traits
 * @group integers
 * @group ttl
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerTtlTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(TtlTrait::class, $this->faker->randomDigit, $this->faker->randomNumber());
    }
}