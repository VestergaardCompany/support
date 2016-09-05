<?php

use VCAS\Support\Traits\Strings\DbNameTrait;

/**
 * Class StringDbNameTest
 *
 * @group traits
 * @group strings
 * @group db-name
 * @coversDefaultClass VCAS\Support\Traits\Strings\DbNameTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringDbNameTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(DbNameTrait::class, $this->faker->word, $this->faker->word);
    }
}