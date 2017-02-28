<?php

use VCAS\Support\Traits\Arrays\StatementsTrait;

/**
 * Class ArrayStatementsTest
 *
 * @group traits
 * @group arrays
 * @group statements
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayStatementsTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(StatementsTrait::class, $this->faker->words(), $this->faker->words());
    }
}