<?php
use VCAS\Support\Traits\Integers\PageTrait;

/**
 * Class IntegerPageTest
 *
 * @group traits
 * @group integers
 * @group page
 * @coversDefaultClass VCAS\Support\Traits\Integers\PageTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerPageTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(PageTrait::class, $this->faker->randomDigit, $this->faker->randomNumber());
    }
}