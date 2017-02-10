<?php

use VCAS\Support\Traits\Strings\LocaleTrait;

/**
 * Class StringLocaleTest
 *
 * @group traits
 * @group strings
 * @group locale
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringLocaleTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(LocaleTrait::class, $this->faker->word, $this->faker->word);
    }
}