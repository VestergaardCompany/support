<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Options Aware
 *
 * Component is aware of some options, which are specified
 * via an array.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface OptionsAware
{
    /**
     * Set the given options
     *
     * @param array $options Options
     *
     * @return void
     */
    public function setOptions(array $options);

    /**
     * Get the given options
     *
     * If no options has been set, this method will
     * set and return a default options, if any such
     * value is available
     *
     * @see getDefaultOptions()
     *
     * @return array|null options or null if none options has been set
     */
    public function getOptions();

    /**
     * Get a default options value, if any is available
     *
     * @return array|null A default options value or Null if no default value is available
     */
    public function getDefaultOptions();

    /**
     * Check if options has been set
     *
     * @return bool True if options has been set, false if not
     */
    public function hasOptions();

    /**
     * Check if a default options is available or not
     *
     * @return bool True of a default options is available, false if not
     */
    public function hasDefaultOptions();
}