<?php

use VCAS\Support\Traits\Strings\ModelFactoriesPathTrait;

/**
 * Class StringModelFactoriesPathTest
 *
 * @group traits
 * @group strings
 * @group model-factories-trait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringModelFactoriesPathTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(ModelFactoriesPathTrait::class, $this->faker->word, $this->faker->word);
    }
}