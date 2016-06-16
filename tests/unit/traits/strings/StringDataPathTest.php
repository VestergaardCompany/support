<?php
use VCAS\Support\Traits\Strings\DataPathTrait;

/**
 * Class StringDataPathTest
 *
 * @group traits
 * @group strings
 * @group data-path
 * @coversDefaultClass VCAS\Support\Traits\Strings\ConfigPathTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringDataPathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(DataPathTrait::class, $this->faker->word, $this->faker->word);
    }
}