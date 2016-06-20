<?php
use VCAS\Support\Traits\Strings\GroupTrait;

/**
 * Class StringGroupTest
 *
 * @group traits
 * @group strings
 * @group group
 * @coversDefaultClass VCAS\Support\Traits\Strings\GroupTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringGroupTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(GroupTrait::class, $this->faker->word, $this->faker->word);
    }
}