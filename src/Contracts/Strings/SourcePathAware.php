<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Source-Path Aware
 *
 * Component is aware of a source path, which can also be
 * specified
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface SourcePathAware
{
    /**
     * Set the given source path
     *
     * @param string $path Source path
     *
     * @return void
     */
    public function setSourcePath($path);

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
    public function getSourcePath();

    /**
     * Get a default source path value, if any is available
     *
     * @return string|null A default source path value or Null if no default value is available
     */
    public function getDefaultSourcePath();

    /**
     * Check if source path has been set
     *
     * @return bool True if source path has been set, false if not
     */
    public function hasSourcePath();

    /**
     * Check if a default source path is available or not
     *
     * @return bool True of a default source path is available, false if not
     */
    public function hasDefaultSourcePath();
}