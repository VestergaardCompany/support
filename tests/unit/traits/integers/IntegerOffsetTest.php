<?php

use VCAS\Support\Traits\Integers\OffsetTrait;

/**
 * Class IntegerOffsetTest
 *
 * @group traits
 * @group integers
 * @group offset
 * @coversDefaultClass VCAS\Support\Traits\Integers\OffsetTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerOffsetTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(OffsetTrait::class, $this->faker->randomDigit, $this->faker->randomNumber());
    }
}