<?php

use VCAS\Support\Traits\Integers\CompanyIdTrait;

/**
 * Class IntegerCompanyIdTest
 *
 * @group traits
 * @group integers
 * @group company-id
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerCompanyIdTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(CompanyIdTrait::class, $this->faker->randomDigit, $this->faker->randomDigit);
    }
}