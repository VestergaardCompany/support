<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Raw (String) Aware
 *
 * <br />
 *
 * Component is aware of a raw string value - whatever it might be!
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface RawAware
{
    /**
     * Set the given raw
     *
     * @param string $value Raw string
     *
     * @return void
     */
    public function setRaw($value);

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
    public function getRaw();

    /**
     * Get a default raw value, if any is available
     *
     * @return string|null A default raw value or Null if no default value is available
     */
    public function getDefaultRaw();

    /**
     * Check if raw has been set
     *
     * @return bool True if raw has been set, false if not
     */
    public function hasRaw();

    /**
     * Check if a default raw is available or not
     *
     * @return bool True of a default raw is available, false if not
     */
    public function hasDefaultRaw();
}