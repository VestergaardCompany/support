<?php

use VCAS\Support\Traits\Strings\FallbackLocaleTrait;

/**
 * Class StringFallbackLocaleTest
 *
 * @group traits
 * @group strings
 * @group fallback-locale
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringFallbackLocaleTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(FallbackLocaleTrait::class, $this->faker->word, $this->faker->word);
    }
}