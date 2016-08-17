<?php

use VCAS\Support\Traits\Strings\ExpireTimeTrait;

/**
 * Class StringExpireTimeTest
 *
 * @group traits
 * @group strings
 * @group expire-time
 * @coversDefaultClass VCAS\Support\Traits\Strings\ExpireTimeTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringExpireTimeTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ExpireTimeTrait::class, $this->faker->time(), $this->faker->time());
    }
}