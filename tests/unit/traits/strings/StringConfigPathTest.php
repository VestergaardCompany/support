<?php
use VCAS\Support\Traits\Strings\ConfigPathTrait;

/**
 * Class StringConfigPathTest
 *
 * @group traits
 * @group strings
 * @group config-path
 * @coversDefaultClass VCAS\Support\Traits\Strings\ConfigPathTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringConfigPathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ConfigPathTrait::class, $this->faker->word, $this->faker->word);
    }
}