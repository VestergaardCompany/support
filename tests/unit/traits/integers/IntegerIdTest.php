<?php
use VCAS\Support\Traits\Integers\IdTrait;

/**
 * Class IntegerIdTest
 *
 * @group traits
 * @group integers
 * @group id
 * @coversDefaultClass VCAS\Support\Traits\Integers\IdTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerIdTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(IdTrait::class, $this->faker->randomDigit, $this->faker->randomNumber());
    }
}