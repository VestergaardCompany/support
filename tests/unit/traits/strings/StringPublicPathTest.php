<?php
use VCAS\Support\Traits\Strings\PublicPathTrait;

/**
 * Class StringPublicPathTest
 *
 * @group traits
 * @group strings
 * @group public-path
 * @coversDefaultClass VCAS\Support\Traits\Strings\PublicPathTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringPublicPathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(PublicPathTrait::class, $this->faker->word, $this->faker->word);
    }
}