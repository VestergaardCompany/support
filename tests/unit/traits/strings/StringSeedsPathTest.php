<?php

use VCAS\Support\Traits\Strings\SeedsPathTrait;

/**
 * Class StringSeedsPathTest
 *
 * @group traits
 * @group strings
 * @group seeds-path
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringSeedsPathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(SeedsPathTrait::class, $this->faker->word, $this->faker->word);
    }
}