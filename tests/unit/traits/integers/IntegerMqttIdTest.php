<?php
use VCAS\Support\Traits\Integers\MqttIdTrait;

/**
 * Class IntegerMqttIdTest
 *
 * @group traits
 * @group integers
 * @group mqtt-id
 * @coversDefaultClass VCAS\Support\Traits\Integers\MqttIdTrait
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class IntegerMqttIdTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(MqttIdTrait::class, $this->faker->randomDigit, $this->faker->randomNumber());
    }
}