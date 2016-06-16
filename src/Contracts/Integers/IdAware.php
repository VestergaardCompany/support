<?php
namespace VCAS\Support\Contracts\Integers;

/**
 * Id Aware
 *
 * Component is aware of and able to specify a unique integer identifier
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Integers
 */
interface IdAware
{
    /**
     * Set the given id
     *
     * @param integer $identifier Unique Identifier
     *
     * @return void
     */
    public function setId($identifier);

    /**
     * Get the given id
     *
     * If no id has been set, this method will
     * set and return a default id, if any such
     * value is available
     *
     * @see getDefaultId()
     *
     * @return integer|null id or null if none id has been set
     */
    public function getId();

    /**
     * Get a default id value, if any is available
     *
     * @return integer|null A default id value or Null if no default value is available
     */
    public function getDefaultId();

    /**
     * Check if id has been set
     *
     * @return bool True if id has been set, false if not
     */
    public function hasId();

    /**
     * Check if a default id is available or not
     *
     * @return bool True of a default id is available, false if not
     */
    public function hasDefaultId();
}