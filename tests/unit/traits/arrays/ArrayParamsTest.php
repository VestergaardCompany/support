<?php
use VCAS\Support\Traits\Arrays\ParamsTrait;

/**
 * Class ArrayParamsTest
 *
 * @group traits
 * @group arrays
 * @group params
 * @coversDefaultClass VCAS\Support\Traits\Arrays\ParamsTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class ArrayParamsTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ParamsTrait::class, $this->faker->words(), $this->faker->words());
    }
}