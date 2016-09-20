<?php
use VCAS\Support\Traits\Strings\DestinationPathTrait;

/**
 * Class StringDestinationPathTest
 *
 * @group traits
 * @group strings
 * @group destination-path
 * @coversDefaultClass VCAS\Support\Traits\Strings\DestinationPathTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringDestinationPathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(DestinationPathTrait::class, $this->faker->word, $this->faker->word);
    }
}