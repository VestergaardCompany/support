<?php

namespace VCAS\Support\Traits\Integers;

/**
 * Expires At Trait
 *
 * @see \VCAS\Support\Contracts\Integers\ExpiresAtAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Integers
 */
trait ExpiresAtTrait
{
    /**
     * UNIX timestamp
     *
     * @var int|null
     */
    protected $expiresAt = null;

    /**
     * Set the given expires at
     *
     * @param int $timestamp UNIX timestamp
     *
     * @return void
     */
    public function setExpiresAt($timestamp)
    {
        $this->expiresAt = (int) $timestamp;
    }

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
    public function getExpiresAt()
    {
        if (!isset($this->expiresAt)) {
            $this->expiresAt = $this->getDefaultExpiresAt();
        }
        return $this->expiresAt;
    }

    /**
     * Get a default expires at value, if any is available
     *
     * @return int|null A default expires at value or Null if no default value is available
     */
    public function getDefaultExpiresAt()
    {
        return null;
    }

    /**
     * Check if expires at has been set
     *
     * @return bool True if expires at has been set, false if not
     */
    public function hasExpiresAt()
    {
        return isset($this->expiresAt);
    }

    /**
     * Check if a default expires at is available or not
     *
     * @return bool True of a default expires at is available, false if not
     */
    public function hasDefaultExpiresAt()
    {
        return false; //!is_null($this->getDefaultExpiresAt());
    }
}