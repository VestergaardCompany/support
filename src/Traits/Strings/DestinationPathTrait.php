<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Destination-Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\DestinationPathAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait DestinationPathTrait
{
    /**
     * Destination path
     *
     * @var string|null
     */
    protected $destinationPath = null;

    /**
     * Set the given destination path
     *
     * @param string $path Destination path
     *
     * @return void
     */
    public function setDestinationPath($path)
    {
        $this->destinationPath = $path;
    }

    /**
     * Get the given destination path
     *
     * If no destination path has been set, this method will
     * set and return a default destination path, if any such
     * value is available
     *
     * @see getDefaultDestinationPath()
     *
     * @return string|null destination path or null if none destination path has been set
     */
    public function getDestinationPath()
    {
        if (!isset($this->destinationPath)) {
            $this->destinationPath = $this->getDefaultDestinationPath();
        }
        return $this->destinationPath;
    }

    /**
     * Get a default destination path value, if any is available
     *
     * @return string|null A default destination path value or Null if no default value is available
     */
    public function getDefaultDestinationPath()
    {
        return null;
    }

    /**
     * Check if destination path has been set
     *
     * @return bool True if destination path has been set, false if not
     */
    public function hasDestinationPath()
    {
        return isset($this->destinationPath);
    }

    /**
     * Check if a default destination path is available or not
     *
     * @return bool True of a default destination path is available, false if not
     */
    public function hasDefaultDestinationPath()
    {
        return false; //!is_null($this->getDefaultDestinationPath());
    }
}