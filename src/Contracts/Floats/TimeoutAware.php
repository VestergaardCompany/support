<?php
namespace VCAS\Support\Contracts\Floats;

/**
 * Timeout Aware
 *
 * Component is aware of a timeout, stated in seconds.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Floats
 */
interface TimeoutAware
{
    /**
     * Set the given timeout
     *
     * @param float $seconds Timeout in seconds
     *
     * @return void
     */
    public function setTimeout($seconds);

    /**
     * Get the given timeout
     *
     * If no timeout has been set, this method will
     * set and return a default timeout, if any such
     * value is available
     *
     * @see getDefaultTimeout()
     *
     * @return float|null timeout or null if none timeout has been set
     */
    public function getTimeout();

    /**
     * Get a default timeout value, if any is available
     *
     * @return float|null A default timeout value or Null if no default value is available
     */
    public function getDefaultTimeout();

    /**
     * Check if timeout has been set
     *
     * @return bool True if timeout has been set, false if not
     */
    public function hasTimeout();

    /**
     * Check if a default timeout is available or not
     *
     * @return bool True of a default timeout is available, false if not
     */
    public function hasDefaultTimeout();
}