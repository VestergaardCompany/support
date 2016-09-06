<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * PkName Aware (Shorthand for Primary Key Name)
 *
 * <br />
 *
 * Component is aware of a "primary" key name, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface PkNameAware
{
    /**
     * Set the given pk name
     *
     * @param string $name Primary Key Name
     *
     * @return void
     */
    public function setPkName($name);

    /**
     * Get the given pk name
     *
     * If no pk name has been set, this method will
     * set and return a default pk name, if any such
     * value is available
     *
     * @see getDefaultPkName()
     *
     * @return string|null pk name or null if none pk name has been set
     */
    public function getPkName();

    /**
     * Get a default pk name value, if any is available
     *
     * @return string|null A default pk name value or Null if no default value is available
     */
    public function getDefaultPkName();

    /**
     * Check if pk name has been set
     *
     * @return bool True if pk name has been set, false if not
     */
    public function hasPkName();

    /**
     * Check if a default pk name is available or not
     *
     * @return bool True of a default pk name is available, false if not
     */
    public function hasDefaultPkName();
}