<?php

use VCAS\Support\Traits\Strings\DatabasePathTrait;

/**
 * Class StringDatabasePathTest
 *
 * @group traits
 * @group string
 * @group database-path
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringDatabasePathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(DatabasePathTrait::class, $this->faker->word, $this->faker->word);
    }
}