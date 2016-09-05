<?php

use VCAS\Support\Traits\Strings\TableTrait;

/**
 * Class StringTableTest
 *
 * @group traits
 * @group strings
 * @group table
 * @coversDefaultClass VCAS\Support\Traits\Strings\TableTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringTableTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(TableTrait::class, $this->faker->word, $this->faker->word);
    }
}