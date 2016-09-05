<?php

use VCAS\Support\Traits\Integers\LimitTrait;

/**
 * Class IntegerLimitTest
 *
 * @group traits
 * @group integers
 * @group limit
 * @coversDefaultClass VCAS\Support\Traits\Integers\LimitTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerLimitTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(LimitTrait::class, $this->faker->randomDigit, $this->faker->randomNumber());
    }
}