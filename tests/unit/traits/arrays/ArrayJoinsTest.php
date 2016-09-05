<?php

use VCAS\Support\Traits\Arrays\JoinsTrait;

/**
 * Class ArrayJoinsTest
 *
 * @group traits
 * @group arrays
 * @group joins
 * @coversDefaultClass VCAS\Support\Traits\Arrays\JoinsTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayJoinsTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(JoinsTrait::class, $this->faker->words(), $this->faker->words());
    }
}