<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Database Path Aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface DatabasePathAware
{
    /**
     * Set the given database path
     *
     * @param string $path Path to a database directory or file
     *
     * @return void
     */
    public function setDatabasePath($path);

    /**
     * Get the given database path
     *
     * If no database path has been set, this method will
     * set and return a default database path, if any such
     * value is available
     *
     * @see getDefaultDatabasePath()
     *
     * @return string|null database path or null if none database path has been set
     */
    public function getDatabasePath();

    /**
     * Get a default database path value, if any is available
     *
     * @return string|null A default database path value or Null if no default value is available
     */
    public function getDefaultDatabasePath();

    /**
     * Check if database path has been set
     *
     * @return bool True if database path has been set, false if not
     */
    public function hasDatabasePath();

    /**
     * Check if a default database path is available or not
     *
     * @return bool True of a default database path is available, false if not
     */
    public function hasDefaultDatabasePath();
}