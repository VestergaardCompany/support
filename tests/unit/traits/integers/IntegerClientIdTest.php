<?php
use VCAS\Support\Traits\Integers\ClientIdTrait;

/**
 * Class IntegerClientIdTest
 *
 * @group traits
 * @group integers
 * @group client-id
 * @coversDefaultClass VCAS\Support\Traits\Integers\ClientIdTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerClientIdTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ClientIdTrait::class, $this->faker->randomDigit, $this->faker->randomDigit);
    }
}