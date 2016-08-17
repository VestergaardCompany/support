<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Version Trait
 *
 * @see \VCAS\Support\Contracts\Strings\VersionAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait VersionTrait
{
    /**
     * Version
     *
     * @var string|null
     */
    protected $version = null;

    /**
     * Set the given version
     *
     * @param string $version Version
     *
     * @return void
     */
    public function setVersion($version)
    {
        $this->version = (string) $version;
    }

    /**
     * Get the given version
     *
     * If no version has been set, this method will
     * set and return a default version, if any such
     * value is available
     *
     * @see getDefaultVersion()
     *
     * @return string|null version or null if none version has been set
     */
    public function getVersion()
    {
        if (!isset($this->version)) {
            $this->version = $this->getDefaultVersion();
        }
        return $this->version;
    }

    /**
     * Get a default version value, if any is available
     *
     * @return string|null A default version value or Null if no default value is available
     */
    public function getDefaultVersion()
    {
        return null;
    }

    /**
     * Check if version has been set
     *
     * @return bool True if version has been set, false if not
     */
    public function hasVersion()
    {
        return isset($this->version);
    }

    /**
     * Check if a default version is available or not
     *
     * @return bool True of a default version is available, false if not
     */
    public function hasDefaultVersion()
    {
        return false; //!is_null($this->getDefaultVersion());
    }
}