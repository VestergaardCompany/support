<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Public Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\PublicPathAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait PublicPathTrait
{
    /**
     * Path to a "public" directory, e.g. a web folder
     *
     * @var string|null
     */
    protected $publicPath = null;

    /**
     * Set the given public path
     *
     * @param string $path Path to a "public" directory, e.g. a web folder
     *
     * @return void
     */
    public function setPublicPath($path)
    {
        $this->publicPath = (string) $path;
    }

    /**
     * Get the given public path
     *
     * If no public path has been set, this method will
     * set and return a default public path, if any such
     * value is available
     *
     * @see getDefaultPublicPath()
     *
     * @return string|null public path or null if none public path has been set
     */
    public function getPublicPath()
    {
        if (!isset($this->publicPath)) {
            $this->publicPath = $this->getDefaultPublicPath();
        }
        return $this->publicPath;
    }

    /**
     * Get a default public path value, if any is available
     *
     * @return string|null A default public path value or Null if no default value is available
     */
    public function getDefaultPublicPath()
    {
        return null;
    }

    /**
     * Check if public path has been set
     *
     * @return bool True if public path has been set, false if not
     */
    public function hasPublicPath()
    {
        return isset($this->publicPath);
    }

    /**
     * Check if a default public path is available or not
     *
     * @return bool True of a default public path is available, false if not
     */
    public function hasDefaultPublicPath()
    {
        return false; //!is_null($this->getDefaultPublicPath());
    }
}