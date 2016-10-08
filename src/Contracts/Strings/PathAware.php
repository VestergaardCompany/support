<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Path Aware
 *
 * Component is aware of a path, which can also be specified
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface PathAware
{
    /**
     * Set the given path
     *
     * @param string $path Path to something
     *
     * @return void
     */
    public function setPath($path);

    /**
     * Get the given path
     *
     * If no path has been set, this method will
     * set and return a default path, if any such
     * value is available
     *
     * @see getDefaultPath()
     *
     * @return string|null path or null if none path has been set
     */
    public function getPath();

    /**
     * Get a default path value, if any is available
     *
     * @return string|null A default path value or Null if no default value is available
     */
    public function getDefaultPath();

    /**
     * Check if path has been set
     *
     * @return bool True if path has been set, false if not
     */
    public function hasPath();

    /**
     * Check if a default path is available or not
     *
     * @return bool True of a default path is available, false if not
     */
    public function hasDefaultPath();
}