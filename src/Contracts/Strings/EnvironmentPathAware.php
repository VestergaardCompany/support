<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Environment Path Aware
 *
 * Component is aware of a location where some kind of
 * environment-file is located. Path is also specifiable.
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface EnvironmentPathAware
{
    /**
     * Set the given environment path
     *
     * @param string $path Path to an environment file
     *
     * @return void
     */
    public function setEnvironmentPath($path);

    /**
     * Get the given environment path
     *
     * If no environment path has been set, this method will
     * set and return a default environment path, if any such
     * value is available
     *
     * @see getDefaultEnvironmentPath()
     *
     * @return string|null environment path or null if none environment path has been set
     */
    public function getEnvironmentPath();

    /**
     * Get a default environment path value, if any is available
     *
     * @return string|null A default environment path value or Null if no default value is available
     */
    public function getDefaultEnvironmentPath();

    /**
     * Check if environment path has been set
     *
     * @return bool True if environment path has been set, false if not
     */
    public function hasEnvironmentPath();

    /**
     * Check if a default environment path is available or not
     *
     * @return bool True of a default environment path is available, false if not
     */
    public function hasDefaultEnvironmentPath();
}