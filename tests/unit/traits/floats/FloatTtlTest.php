<?php

use VCAS\Support\Traits\Floats\TtlTrait;

/**
 * Class FloatTtlTest
 *
 * @group traits
 * @group floats
 * @group ttl
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class FloatTtlTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(TtlTrait::class, $this->faker->randomFloat(), $this->faker->randomFloat());
    }
}