<?php

use Aedart\Testing\GST\GetterSetterTraitTester;
use Codeception\Test\Unit;
use Faker\Factory;
use \Mockery as m;

/**
 * Trait TestCase
 *
 * Base testing class for the getter setter traits
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 */
abstract class TraitTestCase extends Unit
{
    use GetterSetterTraitTester;

    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var Faker\Generator
     */
    protected $faker;

    protected function _before()
    {
        $this->faker = Factory::create();
    }

    protected function _after()
    {
        m::close();
    }

    /**********************************************************
     * Helpers
     *********************************************************/
}