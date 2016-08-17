<?php

use VCAS\Support\Traits\Strings\MqttIdTrait;

/**
 * Class StringMqttIdTest
 *
 * @group traits
 * @group strings
 * @group mqtt-id
 * @coversDefaultClass VCAS\Support\Traits\Strings\MqttIdTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringMqttIdTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(MqttIdTrait::class, $this->faker->uuid, $this->faker->uuid);
    }
}