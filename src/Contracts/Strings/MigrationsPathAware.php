<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Migrations Path Aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface MigrationsPathAware
{
    /**
     * Set the given migrations path
     *
     * @param string $path Path to migration files, scripts or resources
     *
     * @return void
     */
    public function setMigrationsPath($path);

    /**
     * Get the given migrations path
     *
     * If no migrations path has been set, this method will
     * set and return a default migrations path, if any such
     * value is available
     *
     * @see getDefaultMigrationsPath()
     *
     * @return string|null migrations path or null if none migrations path has been set
     */
    public function getMigrationsPath();

    /**
     * Get a default migrations path value, if any is available
     *
     * @return string|null A default migrations path value or Null if no default value is available
     */
    public function getDefaultMigrationsPath();

    /**
     * Check if migrations path has been set
     *
     * @return bool True if migrations path has been set, false if not
     */
    public function hasMigrationsPath();

    /**
     * Check if a default migrations path is available or not
     *
     * @return bool True of a default migrations path is available, false if not
     */
    public function hasDefaultMigrationsPath();
}