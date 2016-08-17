<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Resource Id Trait
 *
 * @see \VCAS\Support\Contracts\Strings\ResourceIdAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait ResourceIdTrait
{
    /**
     * Resource Id
     *
     * @var string|null
     */
    protected $resourceId = null;

    /**
     * Set the given resource id
     *
     * @param string $identifier Resource Id
     *
     * @return void
     */
    public function setResourceId($identifier)
    {
        $this->resourceId = (string) $identifier;
    }

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
    public function getResourceId()
    {
        if (!isset($this->resourceId)) {
            $this->resourceId = $this->getDefaultResourceId();
        }
        return $this->resourceId;
    }

    /**
     * Get a default resource id value, if any is available
     *
     * @return string|null A default resource id value or Null if no default value is available
     */
    public function getDefaultResourceId()
    {
        return null;
    }

    /**
     * Check if resource id has been set
     *
     * @return bool True if resource id has been set, false if not
     */
    public function hasResourceId()
    {
        return isset($this->resourceId);
    }

    /**
     * Check if a default resource id is available or not
     *
     * @return bool True of a default resource id is available, false if not
     */
    public function hasDefaultResourceId()
    {
        return false; //!is_null($this->getDefaultResourceId());
    }
}