<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Resource Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\ResourcePathAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait ResourcePathTrait
{
    /**
     * Path to various resources, e.g. source template files,
     * un-minified javascript, raw CSS files, or assets.
     *
     * @var string|null
     */
    protected $resourcePath = null;

    /**
     * Set the given resource path
     *
     * @param string $path Path to various resources, e.g. source template files,
     * un-minified javascript, raw CSS files, or assets.
     *
     * @return void
     */
    public function setResourcePath($path)
    {
        $this->resourcePath = (string) $path;
    }

    /**
     * Get the given resource path
     *
     * If no resource path has been set, this method will
     * set and return a default resource path, if any such
     * value is available
     *
     * @see getDefaultResourcePath()
     *
     * @return string|null resource path or null if none resource path has been set
     */
    public function getResourcePath()
    {
        if (!isset($this->resourcePath)) {
            $this->resourcePath = $this->getDefaultResourcePath();
        }
        return $this->resourcePath;
    }

    /**
     * Get a default resource path value, if any is available
     *
     * @return string|null A default resource path value or Null if no default value is available
     */
    public function getDefaultResourcePath()
    {
        return null;
    }

    /**
     * Check if resource path has been set
     *
     * @return bool True if resource path has been set, false if not
     */
    public function hasResourcePath()
    {
        return isset($this->resourcePath);
    }

    /**
     * Check if a default resource path is available or not
     *
     * @return bool True of a default resource path is available, false if not
     */
    public function hasDefaultResourcePath()
    {
        return false; //!is_null($this->getDefaultResourcePath());
    }
}