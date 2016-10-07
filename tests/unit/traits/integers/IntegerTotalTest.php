<?php
use VCAS\Support\Traits\Integers\TotalTrait;

/**
 * Class IntegerTotalTest
 *
 * @group traits
 * @group integers
 * @group total
 * @coversDefaultClass VCAS\Support\Traits\Integers\TotalTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerTotalTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(TotalTrait::class, $this->faker->randomDigit, $this->faker->randomNumber());
    }
}