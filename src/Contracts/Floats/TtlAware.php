<?php
namespace VCAS\Support\Contracts\Floats;

/**
 * Ttl Aware
 *
 * Time To Live aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Floats
 */
interface TtlAware
{
    /**
     * Set the given ttl
     *
     * @param float $seconds Time To Live, in seconds
     *
     * @return void
     */
    public function setTtl($seconds);

    /**
     * Get the given ttl
     *
     * If no ttl has been set, this method will
     * set and return a default ttl, if any such
     * value is available
     *
     * @see getDefaultTtl()
     *
     * @return float|null ttl or null if none ttl has been set
     */
    public function getTtl();

    /**
     * Get a default ttl value, if any is available
     *
     * @return float|null A default ttl value or Null if no default value is available
     */
    public function getDefaultTtl();

    /**
     * Check if ttl has been set
     *
     * @return bool True if ttl has been set, false if not
     */
    public function hasTtl();

    /**
     * Check if a default ttl is available or not
     *
     * @return bool True of a default ttl is available, false if not
     */
    public function hasDefaultTtl();
}