<?php

use VCAS\Support\Traits\Strings\ForeignKeyTrait;

/**
 * Class StringForeignKeyTest
 *
 * @group traits
 * @group strings
 * @group foreign-key
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringForeignKeyTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(
            ForeignKeyTrait::class,
            $this->faker->word,
            $this->faker->word
        );
    }
}