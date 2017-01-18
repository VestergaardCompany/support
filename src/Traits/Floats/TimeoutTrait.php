<?php

namespace VCAS\Support\Traits\Floats;

/**
 * Timeout Trait
 *
 * @see \VCAS\Support\Contracts\Floats\TimeoutAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Floats
 */
trait TimeoutTrait
{
    /**
     * Timeout in seconds
     *
     * @var float|null
     */
    protected $timeout = null;

    /**
     * Set the given timeout
     *
     * @param float $seconds Timeout in seconds
     *
     * @return void
     */
    public function setTimeout($seconds)
    {
        $this->timeout = (float) $seconds;
    }

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
    public function getTimeout()
    {
        if (!isset($this->timeout)) {
            $this->timeout = $this->getDefaultTimeout();
        }
        return $this->timeout;
    }

    /**
     * Get a default timeout value, if any is available
     *
     * @return float|null A default timeout value or Null if no default value is available
     */
    public function getDefaultTimeout()
    {
        return null;
    }

    /**
     * Check if timeout has been set
     *
     * @return bool True if timeout has been set, false if not
     */
    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    /**
     * Check if a default timeout is available or not
     *
     * @return bool True of a default timeout is available, false if not
     */
    public function hasDefaultTimeout()
    {
        return false; //!is_null($this->getDefaultTimeout());
    }
}