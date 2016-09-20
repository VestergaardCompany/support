<?php
namespace VCAS\Support\Traits\Strings;


/**
 * Source-Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\SourcePathAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait SourcePathTrait
{
    /**
     * Source path
     *
     * @var string|null
     */
    protected $sourcePath = null;

    /**
     * Set the given source path
     *
     * @param string $path Source path
     *
     * @return void
     */
    public function setSourcePath($path)
    {
        $this->sourcePath = $path;
    }

    /**
     * Get the given source path
     *
     * If no source path has been set, this method will
     * set and return a default source path, if any such
     * value is available
     *
     * @see getDefaultSourcePath()
     *
     * @return string|null source path or null if none source path has been set
     */
    public function getSourcePath()
    {
        if (!isset($this->sourcePath)) {
            $this->sourcePath = $this->getDefaultSourcePath();
        }
        return $this->sourcePath;
    }

    /**
     * Get a default source path value, if any is available
     *
     * @return string|null A default source path value or Null if no default value is available
     */
    public function getDefaultSourcePath()
    {
        return null;
    }

    /**
     * Check if source path has been set
     *
     * @return bool True if source path has been set, false if not
     */
    public function hasSourcePath()
    {
        return isset($this->sourcePath);
    }

    /**
     * Check if a default source path is available or not
     *
     * @return bool True of a default source path is available, false if not
     */
    public function hasDefaultSourcePath()
    {
        return false; //!is_null($this->getDefaultSourcePath());
    }
}