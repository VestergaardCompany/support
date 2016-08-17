<?php

use VCAS\Support\Traits\Strings\TypeTrait;

/**
 * Class StringTypeTest
 *
 * @group traits
 * @group strings
 * @group type
 * @coversDefaultClass VCAS\Support\Traits\Strings\TypeTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringTypeTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(TypeTrait::class, $this->faker->word, $this->faker->word);
    }
}