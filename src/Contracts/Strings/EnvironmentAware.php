<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Environment Aware
 *
 * Component is aware of and able to specify an environment.
 * In this context environment means the "run-time" state of
 * the given component, e.g. production, test, staging, dev, etc.
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface EnvironmentAware
{
    /**
     * Set the given environment
     *
     * @param string $env The current environment
     *
     * @return void
     */
    public function setEnvironment($env);

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
    public function getEnvironment();

    /**
     * Get a default environment value, if any is available
     *
     * @return string|null A default environment value or Null if no default value is available
     */
    public function getDefaultEnvironment();

    /**
     * Check if environment has been set
     *
     * @return bool True if environment has been set, false if not
     */
    public function hasEnvironment();

    /**
     * Check if a default environment is available or not
     *
     * @return bool True of a default environment is available, false if not
     */
    public function hasDefaultEnvironment();
}