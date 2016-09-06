<?php

use VCAS\Support\Traits\Strings\PkNameTrait;

/**
 * Class StringPkNameTest
 *
 * @group traits
 * @group strings
 * @group pk-name
 * @coversDefaultClass VCAS\Support\Traits\Strings\PkNameTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringPkNameTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(PkNameTrait::class, $this->faker->word, $this->faker->word);
    }
}