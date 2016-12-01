<?php
use VCAS\Support\Traits\Strings\NamePrefixTrait;

/**
 * Class StringNamePrefixTest
 *
 * @group traits
 * @group strings
 * @group name-prefix
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringNamePrefixTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(NamePrefixTrait::class, $this->faker->name, $this->faker->lastName);
    }
}