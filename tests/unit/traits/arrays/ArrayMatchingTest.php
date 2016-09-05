<?php

use VCAS\Support\Traits\Arrays\MatchingTrait;

/**
 * Class ArrayMatchingTest
 *
 * @group traits
 * @group arrays
 * @group matching
 * @coversDefaultClass VCAS\Support\Traits\Arrays\MatchingTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayMatchingTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(MatchingTrait::class, $this->faker->words(), $this->faker->words());
    }
}