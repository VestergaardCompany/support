<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Host Aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface HostAware
{
    /**
     * Set the given host
     *
     * @param string $host Host
     *
     * @return void
     */
    public function setHost($host);

    /**
     * Get the given host
     *
     * If no host has been set, this method will
     * set and return a default host, if any such
     * value is available
     *
     * @see getDefaultHost()
     *
     * @return string|null host or null if none host has been set
     */
    public function getHost();

    /**
     * Get a default host value, if any is available
     *
     * @return string|null A default host value or Null if no default value is available
     */
    public function getDefaultHost();

    /**
     * Check if host has been set
     *
     * @return bool True if host has been set, false if not
     */
    public function hasHost();

    /**
     * Check if a default host is available or not
     *
     * @return bool True of a default host is available, false if not
     */
    public function hasDefaultHost();
}