<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Database Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\DatabasePathAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait DatabasePathTrait
{
    /**
     * Path to a database directory or file
     *
     * @var string|null
     */
    protected $databasePath = null;

    /**
     * Set the given database path
     *
     * @param string $path Path to a database directory or file
     *
     * @return void
     */
    public function setDatabasePath($path)
    {
        $this->databasePath = (string) $path;
    }

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
    public function getDatabasePath()
    {
        if (!isset($this->databasePath)) {
            $this->databasePath = $this->getDefaultDatabasePath();
        }
        return $this->databasePath;
    }

    /**
     * Get a default database path value, if any is available
     *
     * @return string|null A default database path value or Null if no default value is available
     */
    public function getDefaultDatabasePath()
    {
        return null;
    }

    /**
     * Check if database path has been set
     *
     * @return bool True if database path has been set, false if not
     */
    public function hasDatabasePath()
    {
        return isset($this->databasePath);
    }

    /**
     * Check if a default database path is available or not
     *
     * @return bool True of a default database path is available, false if not
     */
    public function hasDefaultDatabasePath()
    {
        return false; //!is_null($this->getDefaultDatabasePath());
    }
}