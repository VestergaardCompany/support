<?php

use VCAS\Support\Traits\Strings\PasswordTrait;

/**
 * Class StringPasswordTest
 *
 * @group traits
 * @group strings
 * @group password
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringPasswordTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(PasswordTrait::class, $this->faker->word, $this->faker->word);
    }
}