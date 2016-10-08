<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\PathAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait PathTrait
{
    /**
     * Path to something
     *
     * @var string|null
     */
    protected $path = null;

    /**
     * Set the given path
     *
     * @param string $path Path to something
     *
     * @return void
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Get the given path
     *
     * If no path has been set, this method will
     * set and return a default path, if any such
     * value is available
     *
     * @see getDefaultPath()
     *
     * @return string|null path or null if none path has been set
     */
    public function getPath()
    {
        if (!isset($this->path)) {
            $this->path = $this->getDefaultPath();
        }
        return $this->path;
    }

    /**
     * Get a default path value, if any is available
     *
     * @return string|null A default path value or Null if no default value is available
     */
    public function getDefaultPath()
    {
        return null;
    }

    /**
     * Check if path has been set
     *
     * @return bool True if path has been set, false if not
     */
    public function hasPath()
    {
        return isset($this->path);
    }

    /**
     * Check if a default path is available or not
     *
     * @return bool True of a default path is available, false if not
     */
    public function hasDefaultPath()
    {
        return false; //!is_null($this->getDefaultPath());
    }
}