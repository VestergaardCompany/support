<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Class LocalKeyTrait
 *
 * @see \VCAS\Support\Contracts\Strings\LocalKeyAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait LocalKeyTrait
{
    /**
     * Local Key
     *
     * @var string|null
     */
    protected $localKey = null;

    /**
     * Set the given local key
     *
     * @param string $value Local Key
     *
     * @return void
     */
    public function setLocalKey($value)
    {
        $this->localKey = (string) $value;
    }

    /**
     * Get the given local key
     *
     * If no local key has been set, this method will
     * set and return a default local key, if any such
     * value is available
     *
     * @see getDefaultLocalKey()
     *
     * @return string|null local key or null if none local key has been set
     */
    public function getLocalKey()
    {
        if (!isset($this->localKey)) {
            $this->localKey = $this->getDefaultLocalKey();
        }
        return $this->localKey;
    }

    /**
     * Get a default local key value, if any is available
     *
     * @return string|null A default local key value or Null if no default value is available
     */
    public function getDefaultLocalKey()
    {
        return null;
    }

    /**
     * Check if local key has been set
     *
     * @return bool True if local key has been set, false if not
     */
    public function hasLocalKey()
    {
        return isset($this->localKey);
    }

    /**
     * Check if a default local key is available or not
     *
     * @return bool True of a default local key is available, false if not
     */
    public function hasDefaultLocalKey()
    {
        return false; //!is_null($this->getDefaultLocalKey());
    }
}