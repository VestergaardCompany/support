<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Group Aware
 *
 * Component is aware of and able to set a group.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface GroupAware
{
    /**
     * Set the given group
     *
     * @param string $name Name of a group
     *
     * @return void
     */
    public function setGroup($name);

    /**
     * Get the given group
     *
     * If no group has been set, this method will
     * set and return a default group, if any such
     * value is available
     *
     * @see getDefaultGroup()
     *
     * @return string|null group or null if none group has been set
     */
    public function getGroup();

    /**
     * Get a default group value, if any is available
     *
     * @return string|null A default group value or Null if no default value is available
     */
    public function getDefaultGroup();

    /**
     * Check if group has been set
     *
     * @return bool True if group has been set, false if not
     */
    public function hasGroup();

    /**
     * Check if a default group is available or not
     *
     * @return bool True of a default group is available, false if not
     */
    public function hasDefaultGroup();
}