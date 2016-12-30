<?php

use VCAS\Support\Traits\Mixed\ModelTrait;

/**
 * Class MixedModelTest
 *
 * @group traits
 * @group mixed
 * @group model
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class MixedModelTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ModelTrait::class, new stdClass(), []);
    }
}