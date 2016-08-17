<?php

use VCAS\Support\Traits\Strings\ResourceIdTrait;

/**
 * Class StringResourceIdTest
 *
 * @group traits
 * @group strings
 * @group resource
 * @coversDefaultClass VCAS\Support\Traits\Strings\ResourceIdTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringResourceIdTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ResourceIdTrait::class, $this->faker->uuid, $this->faker->uuid);
    }
}