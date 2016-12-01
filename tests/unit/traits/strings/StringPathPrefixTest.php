<?php

use VCAS\Support\Traits\Strings\PathPrefixTrait;

/**
 * Class StringPathPrefixTest
 *
 * @group traits
 * @group strings
 * @group path-prefix
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringPathPrefixTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(PathPrefixTrait::class, $this->faker->word, $this->faker->word);
    }
}