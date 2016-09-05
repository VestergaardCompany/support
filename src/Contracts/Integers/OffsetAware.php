<?php
namespace VCAS\Support\Contracts\Integers;

/**
 * Offset Aware
 *
 * Component is aware of some kind of numeric offset value.
 * It's meaning depends entirely upon the usage context.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Integers
 */
interface OffsetAware
{
    /**
     * Set the given offset
     *
     * @param int $value Offset
     *
     * @return void
     */
    public function setOffset($value);

    /**
     * Get the given offset
     *
     * If no offset has been set, this method will
     * set and return a default offset, if any such
     * value is available
     *
     * @see getDefaultOffset()
     *
     * @return int|null offset or null if none offset has been set
     */
    public function getOffset();

    /**
     * Get a default offset value, if any is available
     *
     * @return int|null A default offset value or Null if no default value is available
     */
    public function getDefaultOffset();

    /**
     * Check if offset has been set
     *
     * @return bool True if offset has been set, false if not
     */
    public function hasOffset();

    /**
     * Check if a default offset is available or not
     *
     * @return bool True of a default offset is available, false if not
     */
    public function hasDefaultOffset();
}