<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Expire Time Trait
 *
 * @see \VCAS\Support\Contracts\Strings\ExpireTimeAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait ExpireTimeTrait
{
    /**
     * Expire Time
     *
     * @var string|null
     */
    protected $expireTime = null;

    /**
     * Set the given expire time
     *
     * @param string $expireTime Expire Time
     *
     * @return void
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = (string) $expireTime;
    }

    /**
     * Get the given expire time
     *
     * If no expire time has been set, this method will
     * set and return a default expire time, if any such
     * value is available
     *
     * @see getDefaultExpireTime()
     *
     * @return string|null expire time or null if none expire time has been set
     */
    public function getExpireTime()
    {
        if (!isset($this->expireTime)) {
            $this->expireTime = $this->getDefaultExpireTime();
        }
        return $this->expireTime;
    }

    /**
     * Get a default expire time value, if any is available
     *
     * @return string|null A default expire time value or Null if no default value is available
     */
    public function getDefaultExpireTime()
    {
        return null;
    }

    /**
     * Check if expire time has been set
     *
     * @return bool True if expire time has been set, false if not
     */
    public function hasExpireTime()
    {
        return isset($this->expireTime);
    }

    /**
     * Check if a default expire time is available or not
     *
     * @return bool True of a default expire time is available, false if not
     */
    public function hasDefaultExpireTime()
    {
        return false; //!is_null($this->getDefaultExpireTime());
    }
}