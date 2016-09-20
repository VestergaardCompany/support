<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Destination Path Aware
 *
 * Component is aware of a destination path, which can also
 * be specified.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface DestinationPathAware
{
    /**
     * Set the given destination path
     *
     * @param string $path Destination path
     *
     * @return void
     */
    public function setDestinationPath($path);

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
    public function getDestinationPath();

    /**
     * Get a default destination path value, if any is available
     *
     * @return string|null A default destination path value or Null if no default value is available
     */
    public function getDefaultDestinationPath();

    /**
     * Check if destination path has been set
     *
     * @return bool True if destination path has been set, false if not
     */
    public function hasDestinationPath();

    /**
     * Check if a default destination path is available or not
     *
     * @return bool True of a default destination path is available, false if not
     */
    public function hasDefaultDestinationPath();
}