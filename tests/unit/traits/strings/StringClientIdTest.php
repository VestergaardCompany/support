<?php
use VCAS\Support\Traits\Strings\ClientIdTrait;

/**
 * Class StringClientIdTest
 *
 * @group traits
 * @group strings
 * @group client-id
 * @coversDefaultClass VCAS\Support\Traits\Strings\ClientIdTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringClientIdTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ClientIdTrait::class, $this->faker->uuid, $this->faker->uuid);
    }
}