<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Base Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\BasePathAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait BasePathTrait
{
    /**
     * The root (or base) of a given application
     *
     * @var string|null
     */
    protected $basePath = null;

    /**
     * Set the given base path
     *
     * @param string $path The root (or base) of a given application
     *
     * @return void
     */
    public function setBasePath($path)
    {
        $this->basePath = $path;
    }

    /**
     * Get the given base path
     *
     * If no base path has been set, this method will
     * set and return a default base path, if any such
     * value is available
     *
     * @see getDefaultBasePath()
     *
     * @return string|null base path or null if none base path has been set
     */
    public function getBasePath()
    {
        if (!isset($this->basePath)) {
            $this->basePath = $this->getDefaultBasePath();
        }
        return $this->basePath;
    }

    /**
     * Get a default base path value, if any is available
     *
     * @return string|null A default base path value or Null if no default value is available
     */
    public function getDefaultBasePath()
    {
        return null;
    }

    /**
     * Check if base path has been set
     *
     * @return bool True if base path has been set, false if not
     */
    public function hasBasePath()
    {
        return isset($this->basePath);
    }

    /**
     * Check if a default base path is available or not
     *
     * @return bool True of a default base path is available, false if not
     */
    public function hasDefaultBasePath()
    {
        return false; //!is_null($this->getDefaultBasePath());
    }
}