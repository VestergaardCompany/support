<?php

use VCAS\Support\Traits\Strings\CreateTimeTrait;

/**
 * Class StringCreateTimeTest
 *
 * @group traits
 * @group strings
 * @group create-time
 * @coversDefaultClass VCAS\Support\Traits\Strings\CreateTimeTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringCreateTimeTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(CreateTimeTrait::class, $this->faker->time(), $this->faker->time());
    }
}