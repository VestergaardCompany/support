<?php

use VCAS\Support\Traits\Strings\MigrationsPathTrait;

/**
 * Class StringMigrationsPathTest
 *
 * @group traits
 * @group strings
 * @group migrations-path
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringMigrationsPathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(MigrationsPathTrait::class, $this->faker->word, $this->faker->word);
    }
}