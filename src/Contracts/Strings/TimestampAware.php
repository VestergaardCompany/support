<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Timestamp Aware
 *
 * Component is aware of a timestamp
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface TimestampAware
{
    /**
     * Set the given timestamp
     *
     * @param string $timestamp Timestamp
     *
     * @return void
     */
    public function setTimestamp($timestamp);

    /**
     * Get the given timestamp
     *
     * If no timestamp has been set, this method will
     * set and return a default timestamp, if any such
     * value is available
     *
     * @see getDefaultTimestamp()
     *
     * @return string|null timestamp or null if none timestamp has been set
     */
    public function getTimestamp();

    /**
     * Get a default timestamp value, if any is available
     *
     * @return string|null A default timestamp value or Null if no default value is available
     */
    public function getDefaultTimestamp();

    /**
     * Check if timestamp has been set
     *
     * @return bool True if timestamp has been set, false if not
     */
    public function hasTimestamp();

    /**
     * Check if a default timestamp is available or not
     *
     * @return bool True of a default timestamp is available, false if not
     */
    public function hasDefaultTimestamp();
}