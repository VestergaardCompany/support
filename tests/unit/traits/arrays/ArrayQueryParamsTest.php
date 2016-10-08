<?php

use VCAS\Support\Traits\Arrays\QueryParamsTrait;

/**
 * Class ArrayQueryParamsTest
 *
 * @group traits
 * @group arrays
 * @group query-params
 * @coversDefaultClass VCAS\Support\Traits\Arrays\QueryParamsTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayQueryParamsTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(QueryParamsTrait::class, $this->faker->words(), $this->faker->words());
    }
}