<?php

use VCAS\Support\Traits\Strings\DriverProfileTrait;

/**
 * Class StringDriverProfileTest
 *
 * @group traits
 * @group strings
 * @group driver-profile
 * @coversDefaultClass VCAS\Support\Traits\Strings\DriverProfileTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringDriverProfileTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(DriverProfileTrait::class, $this->faker->word, $this->faker->word);
    }
}