<?php

use VCAS\Support\Traits\Strings\PathTrait;

/**
 * Class StringPathTest
 *
 * @group traits
 * @group strings
 * @group path
 * @coversDefaultClass VCAS\Support\Traits\Strings\PathTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringPathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(PathTrait::class, $this->faker->imageUrl(), $this->faker->word);
    }
}