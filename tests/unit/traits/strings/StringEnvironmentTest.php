<?php
use VCAS\Support\Traits\Strings\EnvironmentTrait;

/**
 * Class StringEnvironmentTest
 *
 * @group traits
 * @group strings
 * @group environment
 * @coversDefaultClass VCAS\Support\Traits\Strings\EnvironmentTrait 
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
class StringEnvironmentTest extends TraitTestCase
{
    /**
     * @test
     */
    public function canInvokeAllTraitMethods()
    {
        $this->assertGetterSetterTraitMethods(EnvironmentTrait::class, $this->faker->domainName, $this->faker->domainName);
    }
}