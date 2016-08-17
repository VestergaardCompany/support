<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Type Aware
 *
 * Component is aware of a type, which can also be specified
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface TypeAware
{
    /**
     * Set the given type
     *
     * @param string $type Type
     *
     * @return void
     */
    public function setType($type);

    /**
     * Get the given type
     *
     * If no type has been set, this method will
     * set and return a default type, if any such
     * value is available
     *
     * @see getDefaultType()
     *
     * @return string|null type or null if none type has been set
     */
    public function getType();

    /**
     * Get a default type value, if any is available
     *
     * @return string|null A default type value or Null if no default value is available
     */
    public function getDefaultType();

    /**
     * Check if type has been set
     *
     * @return bool True if type has been set, false if not
     */
    public function hasType();

    /**
     * Check if a default type is available or not
     *
     * @return bool True of a default type is available, false if not
     */
    public function hasDefaultType();
}