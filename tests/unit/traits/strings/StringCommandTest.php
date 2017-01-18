<?php

use VCAS\Support\Traits\Strings\CommandTrait;

/**
 * Class StringCommandTest
 *
 * @group traits
 * @group strings
 * @group command
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringCommandTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(CommandTrait::class, $this->faker->word, $this->faker->word);
    }
}