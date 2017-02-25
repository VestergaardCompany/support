<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Raw Trait
 *
 * @see \VCAS\Support\Contracts\Strings\RawAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait RawTrait
{
    /**
     * Raw string
     *
     * @var string|null
     */
    protected $raw = null;

    /**
     * Set the given raw
     *
     * @param string $value Raw string
     *
     * @return void
     */
    public function setRaw($value)
    {
        $this->raw = (string) $value;
    }

    /**
     * Get the given raw
     *
     * If no raw has been set, this method will
     * set and return a default raw, if any such
     * value is available
     *
     * @see getDefaultRaw()
     *
     * @return string|null raw or null if none raw has been set
     */
    public function getRaw()
    {
        if (!isset($this->raw)) {
            $this->raw = $this->getDefaultRaw();
        }
        return $this->raw;
    }

    /**
     * Get a default raw value, if any is available
     *
     * @return string|null A default raw value or Null if no default value is available
     */
    public function getDefaultRaw()
    {
        return null;
    }

    /**
     * Check if raw has been set
     *
     * @return bool True if raw has been set, false if not
     */
    public function hasRaw()
    {
        return isset($this->raw);
    }

    /**
     * Check if a default raw is available or not
     *
     * @return bool True of a default raw is available, false if not
     */
    public function hasDefaultRaw()
    {
        return false; //!is_null($this->getDefaultRaw());
    }
}