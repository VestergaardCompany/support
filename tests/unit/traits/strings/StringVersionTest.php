<?php

use VCAS\Support\Traits\Strings\VersionTrait;

/**
 * Class StringVersionTest
 *
 * @group traits
 * @group strings
 * @group version
 * @coversDefaultClass VCAS\Support\Traits\Strings\VersionTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringVersionTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(VersionTrait::class, (string) $this->faker->randomNumber(), (string) $this->faker->randomNumber());
    }
}