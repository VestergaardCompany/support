<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Public Path Aware
 *
 * Component is aware of a public path, in which phonically accessible
 * resource are to be found, e.g. javascript, css, videos and other
 * various media.
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface PublicPathAware
{
    /**
     * Set the given public path
     *
     * @param string $path Path to a "public" directory, e.g. a web folder
     *
     * @return void
     */
    public function setPublicPath($path);

    /**
     * Get the given public path
     *
     * If no public path has been set, this method will
     * set and return a default public path, if any such
     * value is available
     *
     * @see getDefaultPublicPath()
     *
     * @return string|null public path or null if none public path has been set
     */
    public function getPublicPath();

    /**
     * Get a default public path value, if any is available
     *
     * @return string|null A default public path value or Null if no default value is available
     */
    public function getDefaultPublicPath();

    /**
     * Check if public path has been set
     *
     * @return bool True if public path has been set, false if not
     */
    public function hasPublicPath();

    /**
     * Check if a default public path is available or not
     *
     * @return bool True of a default public path is available, false if not
     */
    public function hasDefaultPublicPath();
}