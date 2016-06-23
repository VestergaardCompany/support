<?php

use VCAS\Support\Traits\Arrays\OptionsTrait;

/**
 * Class ArrayOptionsTest
 *
 * @group traits
 * @group arrays
 * @group options
 * @coversDefaultClass VCAS\Support\Traits\Arrays\OptionsTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayOptionsTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(OptionsTrait::class, $this->faker->words(), $this->faker->words());
    }
}