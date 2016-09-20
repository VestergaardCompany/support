<?php

use VCAS\Support\Traits\Strings\SourcePathTrait;

/**
 * Class StringSourcePathTest
 *
 * @group traits
 * @group strings
 * @group source-path
 * @coversDefaultClass VCAS\Support\Traits\Strings\SourcePathTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringSourcePathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(SourcePathTrait::class, $this->faker->word, $this->faker->word);
    }
}