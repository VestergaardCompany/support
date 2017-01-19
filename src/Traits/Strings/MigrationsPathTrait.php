<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Migrations Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\MigrationsPathAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait MigrationsPathTrait
{
    /**
     * Path to migration files, scripts or resources
     *
     * @var string|null
     */
    protected $migrationsPath = null;

    /**
     * Set the given migrations path
     *
     * @param string $path Path to migration files, scripts or resources
     *
     * @return void
     */
    public function setMigrationsPath($path)
    {
        $this->migrationsPath = (string) $path;
    }

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
    public function getMigrationsPath()
    {
        if (!isset($this->migrationsPath)) {
            $this->migrationsPath = $this->getDefaultMigrationsPath();
        }
        return $this->migrationsPath;
    }

    /**
     * Get a default migrations path value, if any is available
     *
     * @return string|null A default migrations path value or Null if no default value is available
     */
    public function getDefaultMigrationsPath()
    {
        return null;
    }

    /**
     * Check if migrations path has been set
     *
     * @return bool True if migrations path has been set, false if not
     */
    public function hasMigrationsPath()
    {
        return isset($this->migrationsPath);
    }

    /**
     * Check if a default migrations path is available or not
     *
     * @return bool True of a default migrations path is available, false if not
     */
    public function hasDefaultMigrationsPath()
    {
        return false; //!is_null($this->getDefaultMigrationsPath());
    }
}