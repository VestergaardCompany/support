<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Vars Aware
 *
 * Component is aware of a list of variables.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface VarsAware
{
    /**
     * Set the given vars
     *
     * @param array $list List of various variables
     *
     * @return void
     */
    public function setVars(array $list);

    /**
     * Get the given vars
     *
     * If no vars has been set, this method will
     * set and return a default vars, if any such
     * value is available
     *
     * @see getDefaultVars()
     *
     * @return array|null vars or null if none vars has been set
     */
    public function getVars();

    /**
     * Get a default vars value, if any is available
     *
     * @return array|null A default vars value or Null if no default value is available
     */
    public function getDefaultVars();

    /**
     * Check if vars has been set
     *
     * @return bool True if vars has been set, false if not
     */
    public function hasVars();

    /**
     * Check if a default vars is available or not
     *
     * @return bool True of a default vars is available, false if not
     */
    public function hasDefaultVars();
}