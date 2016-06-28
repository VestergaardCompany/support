<?php
use VCAS\Support\Traits\Arrays\ErrorTrait;

/**
 * Class ArrayErrorTest
 *
 * @group traits
 * @group arrays
 * @group error
 * @coversDefaultClass VCAS\Support\Traits\Arrays\ErrorTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayErrorTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ErrorTrait::class, $this->faker->words(), $this->faker->words());
    }
}