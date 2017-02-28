<?php

use VCAS\Support\Traits\Strings\ConnectionNameTrait;

/**
 * Class StringConnectionNameTest
 *
 * @group traits
 * @group strings
 * @group connection-name
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringConnectionNameTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ConnectionNameTrait::class, $this->faker->word, $this->faker->word);
    }
}