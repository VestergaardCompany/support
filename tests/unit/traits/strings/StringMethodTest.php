<?php

use VCAS\Support\Traits\Strings\MethodTrait;

/**
 * Class StringMethodTest
 *
 * @group traits
 * @group strings
 * @group method
 * @coversDefaultClass VCAS\Support\Traits\Strings\MethodTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringMethodTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(MethodTrait::class, $this->faker->word, $this->faker->word);
    }
}