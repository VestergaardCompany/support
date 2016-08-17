<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Status Aware
 *
 * Component is aware of a status, which also can be specified
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface StatusAware
{
    /**
     * Set the given status
     *
     * @param string $status Status
     *
     * @return void
     */
    public function setStatus($status);

    /**
     * Get the given status
     *
     * If no status has been set, this method will
     * set and return a default status, if any such
     * value is available
     *
     * @see getDefaultStatus()
     *
     * @return string|null status or null if none status has been set
     */
    public function getStatus();

    /**
     * Get a default status value, if any is available
     *
     * @return string|null A default status value or Null if no default value is available
     */
    public function getDefaultStatus();

    /**
     * Check if status has been set
     *
     * @return bool True if status has been set, false if not
     */
    public function hasStatus();

    /**
     * Check if a default status is available or not
     *
     * @return bool True of a default status is available, false if not
     */
    public function hasDefaultStatus();
}