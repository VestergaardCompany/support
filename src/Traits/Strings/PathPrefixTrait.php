<?php namespace VCAS\Support\Traits\Strings;

/**
 * <h1>Path Prefix Trait</h1>
 *
 * @see \VCAS\Support\Contracts\Strings\PathPrefixAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait PathPrefixTrait
{
    /**
     * Prefix for a path
     *
     * @var string|null
     */
    protected $pathPrefix = null;

    /**
     * Set path prefix
     *
     * @param string $prefix Prefix for a path
     *
     * @return void
     */
    public function setPathPrefix($prefix)
    {
        $this->pathPrefix = (string) $prefix;
    }

    /**
     * Get path prefix
     *
     * If no "path prefix" value has been set, this method will
     * set and return a default "path prefix" value,
     * if any such value is available
     *
     * @see getDefaultPathPrefix()
     *
     * @return string|null "path prefix" value or null if no "path prefix" value has been set
     */
    public function getPathPrefix()
    {
        if (!$this->hasPathPrefix() && $this->hasDefaultPathPrefix()) {
            $this->setPathPrefix($this->getDefaultPathPrefix());
        }
        return $this->pathPrefix;
    }

    /**
     * Get a default "path prefix" value, if any is available
     *
     * @return string|null A default "path prefix" value or null if no default value is available
     */
    public function getDefaultPathPrefix()
    {
        return null;
    }

    /**
     * Check if "path prefix" has been set
     *
     * @return bool True if "path prefix" value has been set, false if not
     */
    public function hasPathPrefix()
    {
        return isset($this->pathPrefix);
    }

    /**
     * Check if a default "path prefix" is available or not
     *
     * @return bool True of a default "path prefix" value is available, false if not
     */
    public function hasDefaultPathPrefix()
    {
        $default = $this->getDefaultPathPrefix();
        return isset($default);
    }
}