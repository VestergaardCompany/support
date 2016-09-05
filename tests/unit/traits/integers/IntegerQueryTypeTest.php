<?php

use VCAS\Support\Traits\Integers\QueryTypeTrait;

/**
 * Class IntegerQueryTypeTest
 *
 * @group traits
 * @group integers
 * @group query-type
 * @coversDefaultClass VCAS\Support\Traits\Integers\QueryTypeTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerQueryTypeTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(QueryTypeTrait::class, $this->faker->randomDigit, $this->faker->randomNumber());
    }
}