<?php

use VCAS\Support\Traits\Integers\RangeTrait;

/**
 * Class IntegerRangeTest
 *
 * @group traits
 * @group integers
 * @group range
 * @coversDefaultClass VCAS\Support\Traits\Integers\RangeTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerRangeTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(RangeTrait::class, $this->faker->randomDigit, $this->faker->randomNumber());
    }
}