<?php

use VCAS\Support\Traits\Strings\TimestampTrait;

/**
 * Class StringTimestampTest
 *
 * @group traits
 * @group strings
 * @group timestamp
 * @coversDefaultClass VCAS\Support\Traits\Strings\TimestampTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringTimestampTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(TimestampTrait::class, $this->faker->time(), $this->faker->time());
    }
}