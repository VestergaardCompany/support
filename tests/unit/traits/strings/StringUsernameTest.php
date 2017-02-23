<?php

use VCAS\Support\Traits\Strings\UsernameTrait;

/**
 * Class StringUsernameTest
 *
 * @group traits
 * @group strings
 * @group username
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringUsernameTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(UsernameTrait::class, $this->faker->word, $this->faker->word);
    }
}