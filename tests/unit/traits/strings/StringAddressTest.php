<?php
use VCAS\Support\Traits\Strings\AddressTrait;

/**
 * Class StringAddressTest
 *
 * @group traits
 * @group strings
 * @group address
 * @coversDefaultClass VCAS\Support\Traits\Strings\AddressTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringAddressTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(AddressTrait::class, $this->faker->word, $this->faker->word);
    }
}