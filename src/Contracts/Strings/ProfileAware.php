<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Profile Aware
 *
 * Component is aware of a profile name, which also can
 * be specified.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface ProfileAware
{
    /**
     * Set the given profile
     *
     * @param string $name Name of a profile
     *
     * @return void
     */
    public function setProfile($name);

    /**
     * Get the given profile
     *
     * If no profile has been set, this method will
     * set and return a default profile, if any such
     * value is available
     *
     * @see getDefaultProfile()
     *
     * @return string|null profile or null if none profile has been set
     */
    public function getProfile();

    /**
     * Get a default profile value, if any is available
     *
     * @return string|null A default profile value or Null if no default value is available
     */
    public function getDefaultProfile();

    /**
     * Check if profile has been set
     *
     * @return bool True if profile has been set, false if not
     */
    public function hasProfile();

    /**
     * Check if a default profile is available or not
     *
     * @return bool True of a default profile is available, false if not
     */
    public function hasDefaultProfile();
}