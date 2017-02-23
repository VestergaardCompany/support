<?php

use VCAS\Support\Traits\Strings\HostTrait;

/**
 * Class StringHostTest
 *
 * @group traits
 * @group strings
 * @group host
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringHostTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(HostTrait::class, $this->faker->word, $this->faker->word);
    }
}