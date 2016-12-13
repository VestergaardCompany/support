<?php
namespace VCAS\Support\Contracts\Integers;

/**
 * Expires At Aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Integers
 */
interface ExpiresAtAware
{
    /**
     * Set the given expires at
     *
     * @param int $timestamp UNIX timestamp
     *
     * @return void
     */
    public function setExpiresAt($timestamp);

    /**
     * Get the given expires at
     *
     * If no expires at has been set, this method will
     * set and return a default expires at, if any such
     * value is available
     *
     * @see getDefaultExpiresAt()
     *
     * @return int|null expires at or null if none expires at has been set
     */
    public function getExpiresAt();

    /**
     * Get a default expires at value, if any is available
     *
     * @return int|null A default expires at value or Null if no default value is available
     */
    public function getDefaultExpiresAt();

    /**
     * Check if expires at has been set
     *
     * @return bool True if expires at has been set, false if not
     */
    public function hasExpiresAt();

    /**
     * Check if a default expires at is available or not
     *
     * @return bool True of a default expires at is available, false if not
     */
    public function hasDefaultExpiresAt();
}