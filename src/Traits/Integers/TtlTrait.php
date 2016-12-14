<?php

namespace VCAS\Support\Traits\Integers;

/**
 * Ttl Trait
 *
 * @see \VCAS\Support\Contracts\Integers\TtlAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Integers
 */
trait TtlTrait
{
    /**
     * Time To Live, in seconds
     *
     * @var int|null
     */
    protected $ttl = null;

    /**
     * Set the given ttl
     *
     * @param int $seconds Time To Live, in seconds
     *
     * @return void
     */
    public function setTtl($seconds)
    {
        $this->ttl = $seconds;
    }

    /**
     * Get the given ttl
     *
     * If no ttl has been set, this method will
     * set and return a default ttl, if any such
     * value is available
     *
     * @see getDefaultTtl()
     *
     * @return int|null ttl or null if none ttl has been set
     */
    public function getTtl()
    {
        if (!isset($this->ttl)) {
            $this->ttl = $this->getDefaultTtl();
        }
        return $this->ttl;
    }

    /**
     * Get a default ttl value, if any is available
     *
     * @return int|null A default ttl value or Null if no default value is available
     */
    public function getDefaultTtl()
    {
        return null;
    }

    /**
     * Check if ttl has been set
     *
     * @return bool True if ttl has been set, false if not
     */
    public function hasTtl()
    {
        return isset($this->ttl);
    }

    /**
     * Check if a default ttl is available or not
     *
     * @return bool True of a default ttl is available, false if not
     */
    public function hasDefaultTtl()
    {
        return false; //!is_null($this->getDefaultTtl());
    }
}