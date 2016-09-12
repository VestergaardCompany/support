<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Driver-Profile Aware
 *
 * Component is aware of a driver profile (name of profile).
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface DriverProfileAware
{
    /**
     * Set the given driver profile
     *
     * @param string $profile Name of a "driver" profile
     *
     * @return void
     */
    public function setDriverProfile($profile);

    /**
     * Get the given driver profile
     *
     * If no driver profile has been set, this method will
     * set and return a default driver profile, if any such
     * value is available
     *
     * @see getDefaultDriverProfile()
     *
     * @return string|null driver profile or null if none driver profile has been set
     */
    public function getDriverProfile();

    /**
     * Get a default driver profile value, if any is available
     *
     * @return string|null A default driver profile value or Null if no default value is available
     */
    public function getDefaultDriverProfile();

    /**
     * Check if driver profile has been set
     *
     * @return bool True if driver profile has been set, false if not
     */
    public function hasDriverProfile();

    /**
     * Check if a default driver profile is available or not
     *
     * @return bool True of a default driver profile is available, false if not
     */
    public function hasDefaultDriverProfile();
}