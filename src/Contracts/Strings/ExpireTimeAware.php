<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Expire Time Aware
 *
 * Component is aware of an expiration time
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface ExpireTimeAware
{
    /**
     * Set the given expire time
     *
     * @param string $expireTime Expire Time
     *
     * @return void
     */
    public function setExpireTime($expireTime);

    /**
     * Get the given expire time
     *
     * If no expire time has been set, this method will
     * set and return a default expire time, if any such
     * value is available
     *
     * @see getDefaultExpireTime()
     *
     * @return string|null expire time or null if none expire time has been set
     */
    public function getExpireTime();

    /**
     * Get a default expire time value, if any is available
     *
     * @return string|null A default expire time value or Null if no default value is available
     */
    public function getDefaultExpireTime();

    /**
     * Check if expire time has been set
     *
     * @return bool True if expire time has been set, false if not
     */
    public function hasExpireTime();

    /**
     * Check if a default expire time is available or not
     *
     * @return bool True of a default expire time is available, false if not
     */
    public function hasDefaultExpireTime();
}