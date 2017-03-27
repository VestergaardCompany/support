<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Local Key Aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface LocalKeyAware
{
    /**
     * Set the given local key
     *
     * @param string $value Local Key
     *
     * @return void
     */
    public function setLocalKey($value);

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
    public function getLocalKey();

    /**
     * Get a default local key value, if any is available
     *
     * @return string|null A default local key value or Null if no default value is available
     */
    public function getDefaultLocalKey();

    /**
     * Check if local key has been set
     *
     * @return bool True if local key has been set, false if not
     */
    public function hasLocalKey();

    /**
     * Check if a default local key is available or not
     *
     * @return bool True of a default local key is available, false if not
     */
    public function hasDefaultLocalKey();
}