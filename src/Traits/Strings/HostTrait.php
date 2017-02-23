<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Host Trait
 *
 * @see \VCAS\Support\Contracts\Strings\HostAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait HostTrait
{
    /**
     * Host
     *
     * @var string|null
     */
    protected $host = null;

    /**
     * Set the given host
     *
     * @param string $host Host
     *
     * @return void
     */
    public function setHost($host)
    {
        $this->host = (string) $host;
    }

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
    public function getHost()
    {
        if (!isset($this->host)) {
            $this->host = $this->getDefaultHost();
        }
        return $this->host;
    }

    /**
     * Get a default host value, if any is available
     *
     * @return string|null A default host value or Null if no default value is available
     */
    public function getDefaultHost()
    {
        return null;
    }

    /**
     * Check if host has been set
     *
     * @return bool True if host has been set, false if not
     */
    public function hasHost()
    {
        return isset($this->host);
    }

    /**
     * Check if a default host is available or not
     *
     * @return bool True of a default host is available, false if not
     */
    public function hasDefaultHost()
    {
        return false; //!is_null($this->getDefaultHost());
    }
}