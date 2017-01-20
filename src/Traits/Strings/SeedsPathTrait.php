<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Seeds Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\SeedsPathAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait SeedsPathTrait
{
    /**
     * Path to seeds
     *
     * @var string|null
     */
    protected $seedsPath = null;

    /**
     * Set the given seeds path
     *
     * @param string $path Path to seeds
     *
     * @return void
     */
    public function setSeedsPath($path)
    {
        $this->seedsPath = (string) $path;
    }

    /**
     * Get the given seeds path
     *
     * If no seeds path has been set, this method will
     * set and return a default seeds path, if any such
     * value is available
     *
     * @see getDefaultSeedsPath()
     *
     * @return string|null seeds path or null if none seeds path has been set
     */
    public function getSeedsPath()
    {
        if (!isset($this->seedsPath)) {
            $this->seedsPath = $this->getDefaultSeedsPath();
        }
        return $this->seedsPath;
    }

    /**
     * Get a default seeds path value, if any is available
     *
     * @return string|null A default seeds path value or Null if no default value is available
     */
    public function getDefaultSeedsPath()
    {
        return null;
    }

    /**
     * Check if seeds path has been set
     *
     * @return bool True if seeds path has been set, false if not
     */
    public function hasSeedsPath()
    {
        return isset($this->seedsPath);
    }

    /**
     * Check if a default seeds path is available or not
     *
     * @return bool True of a default seeds path is available, false if not
     */
    public function hasDefaultSeedsPath()
    {
        return false; //!is_null($this->getDefaultSeedsPath());
    }
}