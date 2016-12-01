<?php namespace VCAS\Support\Contracts\Strings;

/**
 * <h1>Name Prefix Aware</h1>
 *
 * Component is aware of a string "name prefix" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface NamePrefixAware
{
    /**
     * Set name prefix
     *
     * @param string $prefix Prefix for a name
     *
     * @return void
     */
    public function setNamePrefix($prefix);

    /**
     * Get name prefix
     *
     * If no "name prefix" value has been set, this method will
     * set and return a default "name prefix" value,
     * if any such value is available
     *
     * @see getDefaultNamePrefix()
     *
     * @return string|null "name prefix" value or null if no "name prefix" value has been set
     */
    public function getNamePrefix();

    /**
     * Get a default "name prefix" value, if any is available
     *
     * @return string|null A default "name prefix" value or null if no default value is available
     */
    public function getDefaultNamePrefix();

    /**
     * Check if "name prefix" has been set
     *
     * @return bool True if "name prefix" value has been set, false if not
     */
    public function hasNamePrefix();

    /**
     * Check if a default "name prefix" is available or not
     *
     * @return bool True of a default "name prefix" value is available, false if not
     */
    public function hasDefaultNamePrefix();
}