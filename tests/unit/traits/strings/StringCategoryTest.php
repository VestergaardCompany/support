<?php

use VCAS\Support\Traits\Strings\CategoryTrait;

/**
 * Class StringCategoryTest
 *
 * @group traits
 * @group strings
 * @group category
 * @coversDefaultClass VCAS\Support\Traits\Strings\CategoryTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringCategoryTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(CategoryTrait::class, $this->faker->word, $this->faker->word);
    }
}