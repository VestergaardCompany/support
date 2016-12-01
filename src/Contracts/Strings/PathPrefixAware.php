<?php namespace VCAS\Support\Contracts\Strings;

/**
 * <h1>Path Prefix Aware</h1>
 *
 * Component is aware of a string "path prefix" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface PathPrefixAware
{
    /**
     * Set path prefix
     *
     * @param string $prefix Prefix for a path
     *
     * @return void
     */
    public function setPathPrefix($prefix);

    /**
     * Get path prefix
     *
     * If no "path prefix" value has been set, this method will
     * set and return a default "path prefix" value,
     * if any such value is available
     *
     * @see getDefaultPathPrefix()
     *
     * @return string|null "path prefix" value or null if no "path prefix" value has been set
     */
    public function getPathPrefix();

    /**
     * Get a default "path prefix" value, if any is available
     *
     * @return string|null A default "path prefix" value or null if no default value is available
     */
    public function getDefaultPathPrefix();

    /**
     * Check if "path prefix" has been set
     *
     * @return bool True if "path prefix" value has been set, false if not
     */
    public function hasPathPrefix();

    /**
     * Check if a default "path prefix" is available or not
     *
     * @return bool True of a default "path prefix" value is available, false if not
     */
    public function hasDefaultPathPrefix();
}