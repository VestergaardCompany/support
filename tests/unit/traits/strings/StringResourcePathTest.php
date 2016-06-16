<?php
use VCAS\Support\Traits\Strings\ResourcePathTrait;

/**
 * Class StringResourcePathTest
 *
 * @group traits
 * @group strings
 * @group resource-path
 * @coversDefaultClass VCAS\Support\Traits\Strings\ResourcePathTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringResourcePathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ResourcePathTrait::class, $this->faker->word, $this->faker->word);
    }
}