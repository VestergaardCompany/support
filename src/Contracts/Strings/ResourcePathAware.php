<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Resource Path Aware
 *
 * Component is able to set and get a path to where various
 * resources are located.
 *
 * A resource can be anything from raw and uncompressed javascript,
 * css, template files and or other assets  * 
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface ResourcePathAware
{
    /**
     * Set the given resource path
     *
     * @param string $path Path to various resources, e.g. source template files,
     * un-minified javascript, raw CSS files, or assets.
     *
     * @return void
     */
    public function setResourcePath($path);

    /**
     * Get the given resource path
     *
     * If no resource path has been set, this method will
     * set and return a default resource path, if any such
     * value is available
     *
     * @see getDefaultResourcePath()
     *
     * @return string|null resource path or null if none resource path has been set
     */
    public function getResourcePath();

    /**
     * Get a default resource path value, if any is available
     *
     * @return string|null A default resource path value or Null if no default value is available
     */
    public function getDefaultResourcePath();

    /**
     * Check if resource path has been set
     *
     * @return bool True if resource path has been set, false if not
     */
    public function hasResourcePath();

    /**
     * Check if a default resource path is available or not
     *
     * @return bool True of a default resource path is available, false if not
     */
    public function hasDefaultResourcePath();
}