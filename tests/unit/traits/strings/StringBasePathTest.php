<?php
use VCAS\Support\Traits\Strings\BasePathTrait;

/**
 * Class StringBasePathTest
 *
 * @group traits
 * @group strings
 * @group base-path
 * @coversDefaultClass VCAS\Support\Traits\Strings\BasePathTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringBasePathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(BasePathTrait::class, $this->faker->word, $this->faker->word);
    }
}