<?php

use VCAS\Support\Traits\Strings\QueryTypeTrait;

/**
 * Class StringQueryTypeTest
 *
 * @group traits
 * @group strings
 * @group query-type
 * @coversDefaultClass VCAS\Support\Traits\Strings\QueryTypeTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringQueryTypeTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(QueryTypeTrait::class, $this->faker->word, $this->faker->word);
    }
}