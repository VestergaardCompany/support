<?php

use VCAS\Support\Traits\Floats\TimeoutTrait;

/**
 * Class FloatTimeoutTest
 *
 * @group traits
 * @group floats
 * @group timeout
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class FloatTimeoutTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(TimeoutTrait::class, $this->faker->randomFloat(), $this->faker->randomFloat());
    }
}