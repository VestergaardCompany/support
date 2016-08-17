<?php

use VCAS\Support\Traits\Arrays\StatsTrait;

/**
 * Class ArrayStatsTest
 *
 * @group traits
 * @group arrays
 * @group stats
 * @coversDefaultClass VCAS\Support\Traits\Arrays\StatsTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayStatsTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(StatsTrait::class, $this->faker->words(), $this->faker->words());
    }
}