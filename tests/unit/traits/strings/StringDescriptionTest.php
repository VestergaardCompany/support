<?php
use VCAS\Support\Traits\Strings\DescriptionTrait;

/**
 * Class StringDescriptionTest
 *
 * @group traits
 * @group strings
 * @group description
 * @coversDefaultClass VCAS\Support\Traits\Strings\DescriptionTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringDescriptionTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(DescriptionTrait::class, $this->faker->sentence, $this->faker->realText());
    }
}