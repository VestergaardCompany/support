<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Environment Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\EnvironmentPathAware
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait EnvironmentPathTrait
{
    /**
     * Path to an environment file
     *
     * @var string|null
     */
    protected $environmentPath = null;

    /**
     * Set the given environment path
     *
     * @param string $path Path to an environment file
     *
     * @return void
     */
    public function setEnvironmentPath($path)
    {
        $this->environmentPath = (string) $path;
    }

    /**
     * Get the given environment path
     *
     * If no environment path has been set, this method will
     * set and return a default environment path, if any such
     * value is available
     *
     * @see getDefaultEnvironmentPath()
     *
     * @return string|null environment path or null if none environment path has been set
     */
    public function getEnvironmentPath()
    {
        if (!isset($this->environmentPath)) {
            $this->environmentPath = $this->getDefaultEnvironmentPath();
        }
        return $this->environmentPath;
    }

    /**
     * Get a default environment path value, if any is available
     *
     * @return string|null A default environment path value or Null if no default value is available
     */
    public function getDefaultEnvironmentPath()
    {
        return null;
    }

    /**
     * Check if environment path has been set
     *
     * @return bool True if environment path has been set, false if not
     */
    public function hasEnvironmentPath()
    {
        return isset($this->environmentPath);
    }

    /**
     * Check if a default environment path is available or not
     *
     * @return bool True of a default environment path is available, false if not
     */
    public function hasDefaultEnvironmentPath()
    {
        return false; //!is_null($this->getDefaultEnvironmentPath());
    }
}