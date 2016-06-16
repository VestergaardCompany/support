<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Environment Trait
 *
 * @see \VCAS\Support\Contracts\Strings\EnvironmentAware 
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait EnvironmentTrait
{
    /**
     * The current environment
     *
     * @var string|null
     */
    protected $environment = null;

    /**
     * Set the given environment
     *
     * @param string $env The current environment
     *
     * @return void
     */
    public function setEnvironment($env)
    {
        $this->environment = (string) $env;
    }

    /**
     * Get the given environment
     *
     * If no environment has been set, this method will
     * set and return a default environment, if any such
     * value is available
     *
     * @see getDefaultEnvironment()
     *
     * @return string|null environment or null if none environment has been set
     */
    public function getEnvironment()
    {
        if (!isset($this->environment)) {
            $this->environment = $this->getDefaultEnvironment();
        }
        return $this->environment;
    }

    /**
     * Get a default environment value, if any is available
     *
     * @return string|null A default environment value or Null if no default value is available
     */
    public function getDefaultEnvironment()
    {
        return null;
    }

    /**
     * Check if environment has been set
     *
     * @return bool True if environment has been set, false if not
     */
    public function hasEnvironment()
    {
        return isset($this->environment);
    }

    /**
     * Check if a default environment is available or not
     *
     * @return bool True of a default environment is available, false if not
     */
    public function hasDefaultEnvironment()
    {
        return false; //!is_null($this->getDefaultEnvironment());
    }
}