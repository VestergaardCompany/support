<?php

use VCAS\Support\Traits\Strings\RawTrait;

/**
 * Class StringRawTest
 *
 * @group traits
 * @group strings
 * @group raw
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringRawTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(RawTrait::class, $this->faker->word, $this->faker->word);
    }
}