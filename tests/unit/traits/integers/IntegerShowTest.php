<?php

use VCAS\Support\Traits\Integers\ShowTrait;

/**
 * Class IntegerShowTest
 *
 * @group traits
 * @group integers
 * @group show
 * @coversDefaultClass VCAS\Support\Traits\Integers\ShowTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerShowTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ShowTrait::class, $this->faker->randomDigit, $this->faker->randomNumber());
    }
}