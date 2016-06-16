<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Base Path Aware
 *
 * The component is aware of a base (or root) path, which
 * also can be specified.
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface BasePathAware
{
    /**
     * Set the given base path
     *
     * @param string $path The root (or base) of a given application
     *
     * @return void
     */
    public function setBasePath($path);

    /**
     * Get the given base path
     *
     * If no base path has been set, this method will
     * set and return a default base path, if any such
     * value is available
     *
     * @see getDefaultBasePath()
     *
     * @return string|null base path or null if none base path has been set
     */
    public function getBasePath();

    /**
     * Get a default base path value, if any is available
     *
     * @return string|null A default base path value or Null if no default value is available
     */
    public function getDefaultBasePath();

    /**
     * Check if base path has been set
     *
     * @return bool True if base path has been set, false if not
     */
    public function hasBasePath();

    /**
     * Check if a default base path is available or not
     *
     * @return bool True of a default base path is available, false if not
     */
    public function hasDefaultBasePath();
}