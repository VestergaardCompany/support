<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Resource Id Aware
 *
 * Component is aware of a string resource id
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface ResourceIdAware
{
    /**
     * Set the given resource id
     *
     * @param string $identifier Resource Id
     *
     * @return void
     */
    public function setResourceId($identifier);

    /**
     * Get the given resource id
     *
     * If no resource id has been set, this method will
     * set and return a default resource id, if any such
     * value is available
     *
     * @see getDefaultResourceId()
     *
     * @return string|null resource id or null if none resource id has been set
     */
    public function getResourceId();

    /**
     * Get a default resource id value, if any is available
     *
     * @return string|null A default resource id value or Null if no default value is available
     */
    public function getDefaultResourceId();

    /**
     * Check if resource id has been set
     *
     * @return bool True if resource id has been set, false if not
     */
    public function hasResourceId();

    /**
     * Check if a default resource id is available or not
     *
     * @return bool True of a default resource id is available, false if not
     */
    public function hasDefaultResourceId();
}