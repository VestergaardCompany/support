<?php

use VCAS\Support\Traits\Integers\ResourceIdTrait;

/**
 * Class IntegerResourceIdTest
 *
 * @group traits
 * @group integers
 * @group resource
 * @coversDefaultClass VCAS\Support\Traits\Integers\ResourceIdTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerResourceIdTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ResourceIdTrait::class, $this->faker->randomDigit, $this->faker->randomNumber());
    }
}