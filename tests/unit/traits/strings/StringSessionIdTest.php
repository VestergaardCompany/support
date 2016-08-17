<?php

use VCAS\Support\Traits\Strings\SessionIdTrait;

/**
 * Class StringSessionIdTest
 *
 * @group traits
 * @group strings
 * @group session-id
 * @coversDefaultClass VCAS\Support\Traits\Strings\SessionIdTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringSessionIdTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(SessionIdTrait::class, $this->faker->md5, $this->faker->sha1);
    }
}