<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Id Trait
 *
 * @see \VCAS\Support\Contracts\Strings\IdAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait IdTrait
{
    /**
     * Unique Identifier
     *
     * @var string|null
     */
    protected $id = null;

    /**
     * Set the given id
     *
     * @param string $identifier Unique Identifier
     *
     * @return void
     */
    public function setId($identifier)
    {
        $this->id = (string) $identifier;
    }

    /**
     * Get the given id
     *
     * If no id has been set, this method will
     * set and return a default id, if any such
     * value is available
     *
     * @see getDefaultId()
     *
     * @return string|null id or null if none id has been set
     */
    public function getId()
    {
        if (!isset($this->id)) {
            $this->id = $this->getDefaultId();
        }

        return $this->id;
    }

    /**
     * Check if id has been set
     *
     * @return bool True if id has been set, false if not
     */
    public function hasId()
    {
        return isset($this->id);
    }

    /**
     * Get a default id value, if any is available
     *
     * @return string|null A default id value or Null if no default value is available
     */
    public function getDefaultId()
    {
        return null;
    }

    /**
     * Check if a default id is available or not
     *
     * @return bool True of a default id is available, false if not
     */
    public function hasDefaultId()
    {
        return false; //!is_null($this->getDefaultId());
    }
}