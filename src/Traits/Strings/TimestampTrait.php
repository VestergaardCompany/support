<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Timestamp Trait
 *
 * @see \VCAS\Support\Contracts\Strings\TimestampAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait TimestampTrait
{
    /**
     * Timestamp
     *
     * @var string|null
     */
    protected $timestamp = null;

    /**
     * Set the given timestamp
     *
     * @param string $timestamp Timestamp
     *
     * @return void
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = (string) $timestamp;
    }

    /**
     * Get the given timestamp
     *
     * If no timestamp has been set, this method will
     * set and return a default timestamp, if any such
     * value is available
     *
     * @see getDefaultTimestamp()
     *
     * @return string|null timestamp or null if none timestamp has been set
     */
    public function getTimestamp()
    {
        if (!isset($this->timestamp)) {
            $this->timestamp = $this->getDefaultTimestamp();
        }
        return $this->timestamp;
    }

    /**
     * Get a default timestamp value, if any is available
     *
     * @return string|null A default timestamp value or Null if no default value is available
     */
    public function getDefaultTimestamp()
    {
        return null;
    }

    /**
     * Check if timestamp has been set
     *
     * @return bool True if timestamp has been set, false if not
     */
    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    /**
     * Check if a default timestamp is available or not
     *
     * @return bool True of a default timestamp is available, false if not
     */
    public function hasDefaultTimestamp()
    {
        return false; //!is_null($this->getDefaultTimestamp());
    }
}