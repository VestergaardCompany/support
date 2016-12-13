<?php

use VCAS\Support\Traits\Integers\ExpiresAtTrait;

/**
 * Class IntegerExpiresAtTest
 *
 * @group traits
 * @group integers
 * @group expiresAt
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerExpiresAtTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ExpiresAtTrait::class, $this->faker->unixTime, $this->faker->unixTime);
    }
}