<?php
use VCAS\Support\Traits\Strings\IdTrait;

/**
 * Class StringIdTest
 *
 * @group traits
 * @group strings
 * @group id
 * @coversDefaultClass VCAS\Support\Traits\Strings\IdTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringIdTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(IdTrait::class, $this->faker->uuid, $this->faker->uuid);
    }
}