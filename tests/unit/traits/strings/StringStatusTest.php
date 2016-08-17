<?php

use VCAS\Support\Traits\Strings\StatusTrait;

/**
 * Class StringStatusTest
 *
 * @group traits
 * @group strings
 * @group status
 * @coversDefaultClass VCAS\Support\Traits\Strings\StatusTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringStatusTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(StatusTrait::class, $this->faker->word, $this->faker->word);
    }
}