<?php

use VCAS\Support\Traits\Strings\LocalKeyTrait;

/**
 * Class StringLocalKeyTest
 *
 * @group traits
 * @group strings
 * @group local-key
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringLocalKeyTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(LocalKeyTrait::class, $this->faker->word, $this->faker->word);
    }
}