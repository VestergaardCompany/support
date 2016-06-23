<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Profile Trait
 *
 * @see \VCAS\Support\Contracts\Strings\ProfileAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait ProfileTrait
{
    /**
     * Name of a profile
     *
     * @var string|null
     */
    protected $profile = null;

    /**
     * Set the given profile
     *
     * @param string $name Name of a profile
     *
     * @return void
     */
    public function setProfile($name)
    {
        $this->profile = $name;
    }

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
    public function getProfile()
    {
        if (!isset($this->profile)) {
            $this->profile = $this->getDefaultProfile();
        }
        return $this->profile;
    }

    /**
     * Get a default profile value, if any is available
     *
     * @return string|null A default profile value or Null if no default value is available
     */
    public function getDefaultProfile()
    {
        return null;
    }

    /**
     * Check if profile has been set
     *
     * @return bool True if profile has been set, false if not
     */
    public function hasProfile()
    {
        return isset($this->profile);
    }

    /**
     * Check if a default profile is available or not
     *
     * @return bool True of a default profile is available, false if not
     */
    public function hasDefaultProfile()
    {
        return false; //!is_null($this->getDefaultProfile());
    }
}