<?php
use VCAS\Support\Traits\Strings\EnvironmentPathTrait;

/**
 * Class StringEnvironmentPathTest
 *
 * @group traits
 * @group strings
 * @group environment-path
 * @coversDefaultClass VCAS\Support\Traits\Strings\EnvironmentPathTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringEnvironmentPathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(EnvironmentPathTrait::class, $this->faker->word, $this->faker->word);
    }
}