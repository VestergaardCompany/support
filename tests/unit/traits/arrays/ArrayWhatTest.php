<?php

use VCAS\Support\Traits\Arrays\WhatTrait;

/**
 * Class ArrayWhatTest
 *
 * @group traits
 * @group arrays
 * @group what
 * @coversDefaultClass VCAS\Support\Traits\Arrays\WhatTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayWhatTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(WhatTrait::class, $this->faker->words(), $this->faker->words());
    }
}