<?php
use VCAS\Support\Traits\Strings\NameTrait;

/**
 * Class StringNameTest
 *
 * @group traits
 * @group strings
 * @group name
 * @coversDefaultClass VCAS\Support\Traits\Strings\NameTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringNameTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(NameTrait::class, $this->faker->name, $this->faker->lastName);
    }
}