<?php
namespace VCAS\Support\Contracts\Integers;

/**
 * Limit Aware
 *
 * Component is aware of some kind of numeric limitation value.
 * It's meaning depends entirely upon the usage context.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Integers
 */
interface LimitAware
{
    /**
     * Set the given limit
     *
     * @param int $value Limit
     *
     * @return void
     */
    public function setLimit($value);

    /**
     * Get the given limit
     *
     * If no limit has been set, this method will
     * set and return a default limit, if any such
     * value is available
     *
     * @see getDefaultLimit()
     *
     * @return int|null limit or null if none limit has been set
     */
    public function getLimit();

    /**
     * Get a default limit value, if any is available
     *
     * @return int|null A default limit value or Null if no default value is available
     */
    public function getDefaultLimit();

    /**
     * Check if limit has been set
     *
     * @return bool True if limit has been set, false if not
     */
    public function hasLimit();

    /**
     * Check if a default limit is available or not
     *
     * @return bool True of a default limit is available, false if not
     */
    public function hasDefaultLimit();
}