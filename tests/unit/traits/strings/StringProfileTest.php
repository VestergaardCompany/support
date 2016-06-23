<?php

use VCAS\Support\Traits\Strings\ProfileTrait;

/**
 * Class StringProfileTest
 *
 * @group traits
 * @group strings
 * @group profile
 * @coversDefaultClass VCAS\Support\Traits\Strings\ProfileTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringProfileTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ProfileTrait::class, $this->faker->word, $this->faker->word);
    }
}